<?php

use console\models\BaseMigration;
use yii\db\Migration;

/**
 * Class m190523_122917_rename_invoice_status_column
 */
class m190523_122917_rename_invoice_status_column extends BaseMigration
{
    public $tableName = '{{%invoice}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn($this->tableName, 'invoice_status', 'invoice_status_id');
        $this->alterColumn($this->tableName, 'invoice_status_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn($this->tableName, 'invoice_status_id', 'invoice_status');
    }
}
