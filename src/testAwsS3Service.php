<?php

require 'vendor/autoload.php'; // Certifique-se de que o caminho está correto para o autoload do Composer

use Aws\S3\S3Client;

try {
    $bucketName = 'yii2test'; // Substitua pelo nome do seu bucket
    $region = 'us-east-2'; // Região correta do bucket
    $awsKey = 'AKIA5MSUBHX7AYIFWY4L'; // Substitua com sua Access Key ID
    $awsSecret = '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'; // Substitua com sua Secret Access Key

    // Inicialize o cliente S3
    $s3 = new S3Client([
        'version' => 'latest',
        'region' => $region,
        'credentials' => [
            'key' => $awsKey,
            'secret' => $awsSecret,
        ],
        'http' => [
            'debug' => true, // Ativar modo de depuração
        ],
    ]);

    // 1. Teste Listando Objetos no Bucket
    echo "Listando objetos no bucket...\n";
    $objects = $s3->listObjects([
        'Bucket' => $bucketName,
    ]);

    if (isset($objects['Contents'])) {
        foreach ($objects['Contents'] as $object) {
            echo " - " . $object['Key'] . "\n";
        }
    } else {
        echo "Nenhum objeto encontrado no bucket.\n";
    }

    // 2. Teste de Upload de um Arquivo
    echo "Fazendo upload de um arquivo de teste...\n";
    $result = $s3->putObject([
        'Bucket' => $bucketName,
        'Key' => 'test-file.txt',
        'Body' => 'Este é um arquivo de teste para verificar o acesso ao S3.',
    ]);

    if ($result) {
        echo "Upload realizado com sucesso! URL do arquivo: " . $result['ObjectURL'] . "\n";
    } else {
        echo "Falha ao fazer upload do arquivo.\n";
    }
} catch (\Exception $e) {
    echo "Erro ao acessar o bucket: " . $e->getMessage() . "\n";
}
