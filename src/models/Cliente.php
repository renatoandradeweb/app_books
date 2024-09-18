<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Cliente extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%cliente}}';
    }

    public function rules()
    {
        return [
            [['nome', 'cpf', 'cep', 'logradouro', 'numero', 'cidade', 'estado', 'sexo'], 'required'],
            [['cpf'], 'match', 'pattern' => '/^\d{11}$/', 'message' => 'CPF inválido.'],
            [['complemento'], 'string'],
            [['sexo'], 'in', 'range' => ['M', 'F']],
            [['cpf'], 'unique'],
        ];
    }
}
