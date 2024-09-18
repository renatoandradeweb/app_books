<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Livro extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%livro}}';
    }

    public function rules()
    {
        return [
            [['isbn', 'titulo', 'autor', 'preco', 'estoque'], 'required'],
            [['isbn'], 'unique'],
            [['preco'], 'number'],
            [['estoque'], 'integer'],
        ];
    }
}
