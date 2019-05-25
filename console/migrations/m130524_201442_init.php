<?php

use console\models\BaseMigration;

class m130524_201442_init extends BaseMigration
{
    public $tableName = '{{%user}}';

    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'username' => $this->string(30)->notNull(),
            'email' => $this->string()->notNull(),
            'auth_key' => $this->string(64)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $this->tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
