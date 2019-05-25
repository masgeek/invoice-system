<?php

/**
 * Class m190520_101310_modify_invoice_due_date_column
 */
class m190520_101310_modify_invoice_due_date_column extends \console\models\BaseMigration
{
    public $tableName = '{{%invoice}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn($this->tableName,'invoice_due_date',$this->date()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190520_101310_modify_invoice_due_date_column cannot be reverted.\n";
        return true;
    }

}
