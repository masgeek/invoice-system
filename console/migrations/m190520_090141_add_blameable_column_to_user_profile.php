<?php

/**
 * Class m190520_090141_add_blameable_column_to_user_profile
 */
class m190520_090141_add_blameable_column_to_user_profile extends \console\models\BaseMigration
{
    public $tableName = '{{%user_profile}}';
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'created_by', $this->integer());
        $this->addColumn($this->tableName, 'updated_by', $this->integer());
    }


    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'created_by');
        $this->dropColumn($this->tableName, 'updated_by');
    }
}
