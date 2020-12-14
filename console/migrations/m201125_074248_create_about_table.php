<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m201125_074248_create_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about}}');
    }
}
