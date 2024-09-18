<?php

namespace app\services;

use app\models\User;
use app\components\JwtHelper;
use Yii;

class AuthService
{
    /**
     * Faz o login do usuário e retorna o access token e refresh token.
     */
    public function login($login, $password)
    {
        try {
            $user = User::findOne(['login' => $login]);

            if (!$user || !$user->validatePassword($password)) {
                return new ServiceResponse(false, null, 'Login ou senha inválidos.', 401);
            }

            // Gerar Access Token
            $accessToken = JwtHelper::generateToken($user);

            // Gerar Refresh Token
            $refreshToken = Yii::$app->security->generateRandomString(255);
            $user->refresh_token = $refreshToken;
            $user->save(false); // Salva o refresh token no banco

            return new ServiceResponse(true, [
                'access_token' => $accessToken,
                'refresh_token' => $refreshToken,
            ], null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }

    /**
     * Cria um novo usuário com login, senha e nome.
     */
    public function createUser($login, $password, $name)
    {
        try {
            $user = new User();
            $user->login = $login;
            $user->name = $name;
            $user->setPassword($password);

            if ($user->save()) {
                return new ServiceResponse(true, $user, null, 201);
            } else {
                return new ServiceResponse(false, null, 'Erro ao criar usuário: ' . implode(", ", $user->getErrorSummary(true)), 400);
            }
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }

    /**
     * Valida o access token JWT.
     */
    public function validateToken($token)
    {
        try {
            $decodedToken = JwtHelper::validateToken($token);
            return new ServiceResponse(true, $decodedToken, null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 401);
        }
    }

    /**
     * Gera um novo access token usando o refresh token.
     */
    public function refreshToken($refreshToken)
    {
        try {
            // Encontrar o usuário pelo refresh token
            $user = User::findOne(['refresh_token' => $refreshToken]);

            if (!$user) {
                return new ServiceResponse(false, null, 'Refresh token inválido ou expirado.', 401);
            }

            // Gerar novo Access Token
            $newAccessToken = JwtHelper::generateToken($user);

            // Gerar um novo Refresh Token
            $newRefreshToken = Yii::$app->security->generateRandomString(255);

            // Atualizar o refresh_token no banco de dados
            $user->refresh_token = $newRefreshToken;
            $user->save(false); // Salva o novo refresh token no banco

            // Retornar o novo refresh token junto com o access token
            return new ServiceResponse(true, [
                'access_token' => $newAccessToken,
                'refresh_token' => $newRefreshToken, // Retorna o novo refresh token
            ], null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }


    /**
     * Invalida o refresh token, efetivamente fazendo logout do usuário.
     */
    public function logout($userId)
    {
        try {
            $user = User::findOne($userId);

            if (!$user) {
                return new ServiceResponse(false, null, 'Usuário não encontrado.', 404);
            }

            // Invalida o refresh token
            $user->refresh_token = null;
            $user->save(false);

            return new ServiceResponse(true, null, null, 200);
        } catch (\Exception $e) {
            return new ServiceResponse(false, null, $e->getMessage(), 500);
        }
    }
}
