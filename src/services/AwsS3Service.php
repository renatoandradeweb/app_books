<?php

namespace app\services;

use Aws\S3\S3Client;
use Yii;
use yii\web\UploadedFile;

class AwsS3Service
{
    private $s3;

    public function __construct()
    {
        // Configure o cliente S3
        $this->s3 = new S3Client([
            'version' => 'latest',
            'region'  => 'us-east-2', // Eegião do bucket da aws
            'credentials' => [
                'key'    => '',  // Testar com sua Access Key ID
                'secret' => '', // Testar com sua Secret Access Key
            ],
            'http' => [
                'verify' => false, // ignorar SSL verification, se necessário
                'debug' => false, // Habilitar modo de depuração
            ],
        ]);
    }

    /**
     * Faz o upload de um arquivo para o bucket S3.
     *
     * @param UploadedFile $file O arquivo a ser enviado
     * @param string $bucketName O nome do bucket S3
     * @return string|null A URL do arquivo enviado ou null em caso de falha
     */
    public function uploadFile(UploadedFile $file, $bucketName)
    {
        try {
            // Gere um nome único para o arquivo
            $fileName = 'uploads/' . uniqid() . '.' . $file->extension;

            // Envia o arquivo para o bucket S3
            $result = $this->s3->putObject([
                'Bucket' => $bucketName,
                'Key'    => $fileName,
                'SourceFile' => $file->tempName,
            ]);

            return $result['ObjectURL'] ?? null;
        } catch (\Exception $e) {
            Yii::error('Erro ao enviar o arquivo para o S3: ' . $e->getMessage());
            return null;
        }
    }
}
