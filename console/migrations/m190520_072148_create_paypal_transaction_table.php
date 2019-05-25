<?php

/**
 * Handles the creation of table `{{%paypal_transaction}}`.
 */
class m190520_072148_create_paypal_transaction_table extends \console\models\BaseMigration
{
    public $tableName = '{{%paypal_transaction}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'payment_id' => $this->string(65)->unique()->notNull(),
            'invoice_id' => $this->integer()->notNull(),
            'payment_token' => $this->string(255),
            'amount_paid' => $this->double(2)->notNull(),
            'payment_status' => $this->string(20)->notNull(),
            'description' => $this->text(),
            'slug' => $this->string(30)->unique(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
        ], $this->tableOptions);

        $this->addForeignKey('fk-paypal-invoice-id', $this->tableName, 'invoice_id', '{{%invoice}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-paypal-invoice-id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
