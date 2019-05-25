<?php

use console\models\BaseMigration;

/**
 * Handles the creation of table `{{%invoice_status}}`.
 */
class m190523_121639_create_invoice_status_table extends BaseMigration
{
    public $tableName = '{{%invoice_status}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'status' => $this->string(30)->notNull(),
            'color' => $this->string(15)->notNull()->defaultValue('green'),
            'slug' => $this->string(30)->unique(),
            'created_at' => $this->integer(30),
            'updated_at' => $this->integer(30)->defaultValue(null),
            'updated_by' => $this->integer(),
            'created_by' => $this->integer(),
        ], $this->tableOptions);

        $this->insert($this->tableName, ['status' => 'Draft']);
        $this->insert($this->tableName, ['status' => 'Pending']);
        $this->insert($this->tableName, ['status' => 'Paid']);
        $this->insert($this->tableName, ['status' => 'Cancelled']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
