<?php

namespace app\controllers;

use Yii;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\Controller;
use app\services\AuthService;

class UserController extends Controller
{
    protected $authService;

    public function __construct($id, $module, AuthService $authService, $config = [])
    {
        $this->authService = $authService;
        parent::__construct($id, $module, $config);
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Adicionar autenticação baseada em JWT
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
            'except' => ['login', 'create', 'refresh-token', 'logout'], // Ações públicas
        ];

        return $behaviors;
    }

    public function actionLogin()
    {
        $request = Yii::$app->request->post();
        $response = $this->authService->login($request['login'], $request['password']);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionCreate()
    {
        $request = Yii::$app->request->post();
        $response = $this->authService->createUser($request['login'], $request['password'], $request['name']);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionRefreshToken()
    {

        $request = Yii::$app->request->post();
        $refreshToken = isset($request['refresh_token']) ? $request['refresh_token'] : null;

        if (!$refreshToken) {
            return [
                'success' => false,
                'data' => null,
                'error' => 'Refresh token não fornecido.',
            ];
        }

        $response = $this->authService->refreshToken($refreshToken);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }

    public function actionLogout()
    {
        // Capturar o ID do usuário da requisição
        $userId = Yii::$app->request->post('user_id');

        if (!$userId) {
            return [
                'success' => false,
                'data' => null,
                'error' => 'ID do usuário não fornecido.',
            ];
        }

        // Chamar o AuthService para processar o logout
        $response = $this->authService->logout($userId);

        Yii::$app->response->statusCode = $response->statusCode;
        return $response;
    }
}
