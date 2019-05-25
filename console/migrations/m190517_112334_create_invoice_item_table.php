<?php

use console\models\BaseMigration;

/**
 * Handles the creation of table `{{%invoice_items}}`.
 */
class m190517_112334_create_invoice_item_table extends BaseMigration
{
    public $tableName = '{{%invoice_item}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'invoice_id' => $this->integer()->notNull(),
            'item_description' => $this->text(),
            'item_cost' => $this->double(2)->notNull(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
        ], $this->tableOptions);

        $this->addForeignKey('fk-item-invoice-id', $this->tableName, 'invoice_id', '{{%invoice}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-item-invoice-id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
