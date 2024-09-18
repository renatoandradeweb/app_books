<?php

namespace app\controllers;

use Yii;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\Controller;
use app\services\ClienteService;

class ClienteController extends Controller
{
    protected $clienteService;

    public function __construct($id, $module, ClienteService $clienteService, $config = [])
    {
        $this->clienteService = $clienteService;
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
        $response = $this->clienteService->cadastrarCliente($request);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionIndex($limit = 10, $offset = 0, $order = 'nome', $filter = null)
    {
        $response = $this->clienteService->listarClientes($limit, $offset, $order, $filter);

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON; // Garante o retorno em JSON
        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionUpload($id)
    {
        // Chame o serviço de upload
        $response = $this->clienteService->uploadImage($id);

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
