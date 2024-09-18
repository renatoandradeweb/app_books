#!/bin/bash

echo 'Esperando o banco de dados...'
# Verifica se o MySQL está disponível usando mysqladmin
until mysqladmin ping -h db -u"$DB_USER" -p"$DB_PASSWORD" --silent; do
  echo 'Aguardando o MySQL estar disponível...'
  sleep 2
done

echo 'Banco de dados disponível. Executando migrations...'
php yii migrate/up --interactive=0

echo 'Iniciando o Apache...'
apache2-foreground & # Iniciar o Apache em segundo plano

echo 'Aguardando o Apache iniciar...'
# Aguarda até que a aplicação esteja disponível na porta 80 localmente
until curl -s http://127.0.0.1 > /dev/null; do
  echo 'Aguardando a aplicação ficar disponível...'
  sleep 2
done

echo 'Criando usuário padrão via API...'
curl -X POST -H 'Content-Type: application/json' -d '{"login":"admin","password":"admin123","name":"Admin User"}' http://127.0.0.1/user/create

# Manter o contêiner ativo aguardando o Apache
wait
