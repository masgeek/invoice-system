<?php

/**
 * Class m190520_081632_alter_timestamp_column_data_type
 */
class m190520_081632_alter_timestamp_column_data_type extends \console\models\BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach ($this->getTables() as $tableName) {
            $this->alterColumn($tableName, 'created_at', $this->integer(30));
            $this->alterColumn($tableName, 'updated_at', $this->integer(30));
        }
    }

    public function safeDown()
    {
        return true;
    }
}
