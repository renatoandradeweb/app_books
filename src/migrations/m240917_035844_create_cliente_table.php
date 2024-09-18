<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cliente}}`.
 */
class m240917_035844_create_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cliente}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'cpf' => $this->string(11)->notNull()->unique(),
            'cep' => $this->string(8)->notNull(),
            'logradouro' => $this->string()->notNull(),
            'numero' => $this->string()->notNull(),
            'cidade' => $this->string()->notNull(),
            'estado' => $this->string(2)->notNull(),
            'complemento' => $this->string()->null(),
            'sexo' => $this->string(1)->notNull()->check("sexo IN ('M', 'F')"),
            'image_path' => $this->string()->null(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('idx_cliente_cpf', '{{%cliente}}', 'cpf');
    }

    public function safeDown()
    {
        $this->dropTable('{{%cliente}}');
    }
}
