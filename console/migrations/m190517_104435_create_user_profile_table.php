<?php

use console\models\BaseMigration;

/**
 * Handles the creation of table `{{%user_profile}}`.
 */
class m190517_104435_create_user_profile_table extends BaseMigration
{
    public $tableName = '{{%user_profile}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'company_name' => $this->string(120)->notNull(),
            'surname' => $this->string()->notNull(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string(),
            'phone_number' => $this->string(),
            'address' => $this->text(),
            'notes' => $this->text(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ], $this->tableOptions);


        $this->addForeignKey('fk-user-id', $this->tableName, 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user-id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
