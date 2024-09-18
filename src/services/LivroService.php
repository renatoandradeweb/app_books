<?php

namespace app\services;

use app\models\Livro;
use yii\web\UploadedFile;
use Yii;

class LivroService
{
    private $awsS3Service;

    // Construtor para injetar o AwsS3Service
    public function __construct(AwsS3Service $awsS3Service)
    {
        $this->awsS3Service = $awsS3Service;
    }

    public function cadastrarLivro($dados)
    {
        try {
            // Criação e salvamento do livro
            $livro = new Livro();
            $livro->attributes = $dados;

            if ($livro->validate() && $livro->save()) {
                return new ServiceResponse(true, $livro, null, 201);
            } else {
                return new ServiceResponse(false, null, 'Erro ao salvar livro: ' . implode(", ", $livro->getErrorSummary(true)), 400);
            }
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }

    public function listarLivros($limit = 10, $offset = 0, $order = 'titulo', $filter = null)
    {
        try {
            $query = Livro::find();

            // Filtrar por título, autor ou ISBN
            if ($filter) {
                $query->andFilterWhere(['like', 'titulo', $filter])
                    ->orFilterWhere(['like', 'autor', $filter])
                    ->orFilterWhere(['like', 'isbn', $filter]);
            }

            // Ordenar por título ou preço, padrão é 'titulo'
            if (in_array($order, ['titulo', 'preco'])) {
                $query->orderBy([$order => SORT_ASC]);
            }

            // Aplicar paginação
            $livros = $query->limit($limit)->offset($offset)->all();

            return new ServiceResponse(true, $livros, null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }


    public function uploadImageForBook($livroId)
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
                // Atualize o livro com a URL da imagem
                $livro = Livro::findOne($livroId);
                if (!$livro) {
                    return new ServiceResponse(false, null, 'Livro não encontrado.', 404);
                }

                $livro->image_path = $result; // Atualiza o campo `image_path` com a URL retornada
                if ($livro->save()) {
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
