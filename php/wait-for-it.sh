#!/usr/bin/env bash

# Define as variáveis
HOST=$1
PORT=$2
TIMEOUT=${3:-60}  # Tempo limite padrão de 60 segundos

echo "Esperando o banco de dados em $HOST:$PORT por até $TIMEOUT segundos..."

# Inicializa um contador
start_time=$(date +%s)

while :
do
    # Tenta se conectar ao banco de dados
    (echo > /dev/tcp/$HOST/$PORT) >/dev/null 2>&1
    result=$?

    if [[ $result -eq 0 ]]; then
        echo "Banco de dados $HOST:$PORT está disponível!"
        break
    fi

    # Calcula o tempo de espera
    current_time=$(date +%s)
    elapsed_time=$((current_time - start_time))

    if [[ $elapsed_time -ge $TIMEOUT ]]; then
        echo "Timeout de $TIMEOUT segundos atingido enquanto esperava por $HOST:$PORT"
        exit 1
    fi

    # Aguarda 1 segundo antes de tentar novamente
    sleep 1
done

# Executa o comando passado como argumento
shift 3
exec "$@"
