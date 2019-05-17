<?php

use console\models\BaseMigration;

/**
 * Handles the creation of table `{{%invoice_payment}}`.
 */
class m190517_113114_create_invoice_payment_table extends BaseMigration
{
    public $tableName ='{{%invoice_payment}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'invoice_id' => $this->integer(),
            'amount_paid' => $this->double(2)->notNull(),
        ]);

        $this->addForeignKey('fk-payment-invoice-id-', $this->tableName, 'invoice_id', '{{%invoice}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
