<?php

use console\models\BaseMigration;

/**
 * Class m190524_070002_add_user_type_column
 */
class m190524_070002_add_user_type_column extends BaseMigration
{
    public $tableName = '{{%user}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'user_type', $this->integer(3));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'user_type');
    }
}
