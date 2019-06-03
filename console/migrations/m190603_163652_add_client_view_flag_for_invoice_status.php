<?php

/**
 * Class m190603_163652_add_client_view_flag_for_invoice_status
 */
class m190603_163652_add_client_view_flag_for_invoice_status extends \console\models\BaseMigration
{
    public $tableName = '{{%invoice_status}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'client_visible', $this->boolean()->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'client_visible');
    }
}
