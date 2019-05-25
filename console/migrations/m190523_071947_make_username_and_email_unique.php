<?php

/**
 * Class m190523_071947_make_username_and_email_unique
 */
class m190523_071947_make_username_and_email_unique extends \console\models\BaseMigration
{
    public $tableName = '{{%user}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn($this->tableName, 'username', $this->string(100)->notNull()->unique());
        $this->alterColumn($this->tableName, 'email', $this->string(255)->notNull()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return true;
    }
}
