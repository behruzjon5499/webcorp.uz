<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback}}`.
 */
class m201124_090826_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'description_ru' => $this->text(),
            'status' => $this->integer()->defaultValue(0),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feedback}}');
    }
}
