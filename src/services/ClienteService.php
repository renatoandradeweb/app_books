<?php

namespace app\services;

use app\models\Cliente;
use yii\web\UploadedFile;
use Yii;

class ClienteService
{
    private $awsS3Service;

    // Construtor para injetar o AwsS3Service
    public function __construct(AwsS3Service $awsS3Service)
    {
        $this->awsS3Service = $awsS3Service;
    }

    public function cadastrarCliente($dados)
    {
        try {
            // Validação de CPF
            if (!preg_match('/^\d{11}$/', $dados['cpf'])) {
                return new ServiceResponse(false, null, 'CPF inválido.', 400);
            }

            // Validação de CEP (Opcional)
            if (isset($dados['cep']) && !CepValidatorService::validateCep($dados['cep'])) {
                return new ServiceResponse(false, null, 'CEP inválido.', 400);
            }

            // Criação e salvamento do cliente
            $cliente = new Cliente();
            $cliente->attributes = $dados;

            if ($cliente->validate() && $cliente->save()) {
                return new ServiceResponse(true, $cliente, null, 201);
            } else {
                return new ServiceResponse(false, null, 'Erro ao salvar cliente: ' . implode(", ", $cliente->getErrorSummary(true)), 400);
            }
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }

    public function listarClientes($limit = 10, $offset = 0, $order = 'nome', $filter = null)
    {
        try {
            $query = Cliente::find();

            // Filtro por nome ou CPF
            if ($filter) {
                $query->andFilterWhere(['like', 'nome', $filter])
                    ->orFilterWhere(['like', 'cpf', $filter]);
            }

            // Ordenar por nome, cpf ou cidade
            if (in_array($order, ['nome', 'cpf', 'cidade'])) {
                $query->orderBy([$order => SORT_ASC]);
            }

            // Aplicar paginação
            $clientes = $query->limit($limit)->offset($offset)->all();

            return new ServiceResponse(true, $clientes, null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }

    public function uploadImage($clienteId)
    {
        // Obtenha o arquivo enviado
        $file = UploadedFile::getInstanceByName('file');

        // Verifique se o arquivo foi enviado
        if (!$file) {
            return new ServiceResponse(false, null, 'Nenhum arquivo enviado.', 400);
        }

        // Verifique se o arquivo é do tipo permitido (jpg ou png)
        $allowedTypes = ['image/jpeg', 'image/png'];
        if (!in_array($file->type, $allowedTypes)) {
            return new ServiceResponse(false, null, 'Tipo de arquivo inválido. Apenas JPG e PNG são permitidos.', 400);
        }

        // Nome do bucket
        $bucketName = 'yii2test'; // Substitua pelo nome do seu bucket

        // Tente fazer o upload
        try {
            // Upload do arquivo para o S3
            $result = $this->awsS3Service->uploadFile($file, $bucketName);

            if ($result) {
                // Atualize o cliente com a URL da imagem
                $cliente = Cliente::findOne($clienteId);
                if (!$cliente) {
                    return new ServiceResponse(false, null, 'Cliente não encontrado.', 404);
                }

                $cliente->image_path = $result; // Atualiza o campo `image_path` com a URL retornada
                if ($cliente->save()) {
                    return new ServiceResponse(true, ['file_url' => $result], null, 200);
                } else {
                    return new ServiceResponse(false, null, 'Falha ao atualizar a URL da imagem no banco de dados.', 500);
                }
            } else {
                return new ServiceResponse(false, null, 'Falha ao fazer o upload do arquivo.', 500);
            }
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, 'Erro ao fazer o upload: ' . $e->getMessage(), 500);
        }
    }
}
