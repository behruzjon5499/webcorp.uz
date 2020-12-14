<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m201118_071337_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'date' => $this->integer()->notNull(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
