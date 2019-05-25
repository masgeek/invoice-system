<?php

/**
 * Class m190520_123608_alter_invoice_columns
 */
class m190520_123608_alter_invoice_columns extends \console\models\BaseMigration
{
    public $tableName = '{{%invoice}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn($this->tableName, 'invoice_sub_total', $this->double(2)->defaultValue(0.0));
        $this->alterColumn($this->tableName, 'invoice_total', $this->double(2)->defaultValue(0.0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190520_123608_alter_invoice_columns cannot be reverted.\n";

        return true;
    }
}
