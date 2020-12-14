<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio}}`.
 */
class m201125_121742_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'category_id' => $this->integer(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
            'status' => $this->integer()->defaultValue(0)
        ], $tableOptions);
        $this->createIndex('index-portfolio-category_id', 'portfolio', 'category_id');
        $this->addForeignKey('fkey-portfolio-category_id', 'portfolio', 'category_id', 'categories', 'id', 'RESTRICT', 'RESTRICT');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
