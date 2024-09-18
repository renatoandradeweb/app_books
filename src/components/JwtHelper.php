<?php

namespace app\components;

use Yii;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtHelper
{
    public static function generateToken($user)
    {
        $payload = [
            'iss' => 'localhost', // Emissor
            'aud' => 'localhost', // Público
            'iat' => time(), // Tempo de emissão
            'exp' => time() + 3600, // Expiração (1 hora)
            'uid' => $user->id,
            'login' => $user->login,
        ];

        return JWT::encode($payload, Yii::$app->params['jwtSecretKey'], 'HS256');
    }

    public static function validateToken($token)
    {
        try {
            $decoded = JWT::decode($token, new Key(Yii::$app->params['jwtSecretKey'], 'HS256'));
            return $decoded;
        } catch (\Exception $e) {
            return null;
        }
    }

}
