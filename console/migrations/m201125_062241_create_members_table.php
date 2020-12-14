<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%members}}`.
 */
class m201125_062241_create_members_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%members}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(),
            'lovozimi' => $this->string(),
            'phone' => $this->string(),
            'photo' => $this->string(),
            'telegram' => $this->string(),
            'instagram' => $this->string(),
            'facebook' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%members}}');
    }
}
