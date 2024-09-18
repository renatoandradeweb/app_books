<?php

namespace app\models;

use Yii;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use yii\web\IdentityInterface;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [
            [['login', 'password', 'name'], 'required'],
            [['login'], 'unique'],
            [['password'], 'string', 'min' => 8],
        ];
    }

    // Implementação do método findIdentity
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    // Implementação do método getId
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    // Implementação do método findIdentityByAccessToken
    public static function findIdentityByAccessToken($token, $type = null)
    {
        try {
            // Decodifica o token JWT
            $decoded = JWT::decode($token, new Key(Yii::$app->params['jwtSecretKey'], 'HS256'));

            // Encontra o usuário pelo ID contido no token
            return static::findOne(['id' => $decoded->uid]); // Mudança: 'uid' é o campo no token com o ID do usuário
        } catch (\Exception $e) {
            // Retorna null se o token for inválido ou não puder ser decodificado
            return null;
        }
    }

    // Implementação do método getAuthKey
    public function getAuthKey()
    {
        // Retornar null ou uma string vazia, pois não é utilizado para autenticação JWT
        return null;
    }

    // Implementação do método validateAuthKey
    public function validateAuthKey($authKey)
    {
        // Retornar true ou false conforme a lógica, para JWT pode ser sempre true
        return true;
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->getSecurity()->generatePasswordHash($password);
    }

    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
}
