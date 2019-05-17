<?php

use console\models\BaseMigration;

/**
 * Handles the creation of table `{{%invoice}}`.
 */
class m190517_112155_create_invoice_table extends BaseMigration
{
    public $tableName = '{{%invoice}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'vat_percentage' => $this->double(2)->notNull()->defaultValue(0),
            'invoice_sub_total' => $this->double(2)->notNull(),
            'invoice_total' => $this->double(2)->notNull(),
            'invoice_status' => $this->string(15)->notNull(),
            'invoice_due_date' => $this->timestamp(null),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'updated_by' => $this->string(),
            'created_by' => $this->string(),
        ], $this->tableOptions);

        $this->addForeignKey('fk-user-invoice-id', $this->tableName, 'user_id', '{{%user}}', 'id', 'RESTRICT', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
