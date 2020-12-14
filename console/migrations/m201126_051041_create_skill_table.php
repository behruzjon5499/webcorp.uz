<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skill}}`.
 */
class m201126_051041_create_skill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%skill}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'foiz' => $this->integer(),
            'color' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%skill}}');
    }
}
