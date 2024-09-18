<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%livro}}`.
 */
class m240917_035924_create_livro_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%livro}}', [
            'id' => $this->primaryKey(),
            'isbn' => $this->string()->notNull()->unique(),
            'titulo' => $this->string()->notNull(),
            'autor' => $this->string()->notNull(),
            'preco' => $this->decimal(10, 2)->notNull(),
            'estoque' => $this->integer()->notNull(),
            'image_path' => $this->string()->null(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);

        $this->createIndex('idx_livro_isbn', '{{%livro}}', 'isbn');
    }

    public function safeDown()
    {
        $this->dropTable('{{%livro}}');
    }
}
