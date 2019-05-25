<?php

/**
 * Class m190518_095949_add_user_blameable_columns
 */
class m190518_095949_add_user_blameable_columns extends \console\models\BaseMigration
{
    public $tableName = '{{%user}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'created_by', $this->integer());
        $this->addColumn($this->tableName, 'updated_by', $this->integer());
    }


    public function safeDown()
    {
        return true;
    }
}
