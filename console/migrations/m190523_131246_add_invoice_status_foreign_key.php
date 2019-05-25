<?php

use console\models\BaseMigration;

/**
 * Class m190523_131246_add_invoice_status_foreign_key
 */
class m190523_131246_add_invoice_status_foreign_key extends BaseMigration
{
    public $tableName = '{{%invoice}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('invoice-status-fk', $this->tableName, 'invoice_status_id', '{{%invoice_status}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('invoice-status-fk', $this->tableName);
    }
}
