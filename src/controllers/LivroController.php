<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\services\LivroService;
use yii\filters\auth\HttpBearerAuth;

class LivroController extends Controller
{
    protected $livroService;

    public function __construct($id, $module, LivroService $livroService, $config = [])
    {
        $this->livroService = $livroService;
        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Adicionar autenticação baseada em JWT
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
            'except' => [], // Ações públicas
        ];

        return $behaviors;
    }

    public function actionCreate()
    {
        $request = Yii::$app->request->post();
        $response = $this->livroService->cadastrarLivro($request);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionIndex($limit = 10, $offset = 0, $order = 'titulo', $filter = null)
    {
        $response = $this->livroService->listarLivros($limit, $offset, $order, $filter);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionUpload($id)
    {
        // Chame o serviço de upload
        $response = $this->livroService->uploadImageForBook($id);

        // Verifique se a resposta é válida
        if ($response === null) {
            Yii::$app->response->statusCode = 500;
            return [
                'success' => false,
                'error' => 'Ocorreu um erro inesperado.',
            ];
        }

        // Retorne a resposta do serviço
        Yii::$app->response->statusCode = $response->statusCode;
        return [
            'success' => $response->success,
            'data' => $response->data,
            'error' => $response->error,
        ];
    }
}
