<?php

/**
 * Class m190520_082724_alter_invoice_auto_increment
 */
class m190520_082724_alter_invoice_auto_increment extends \console\models\BaseMigration
{
    public $tableName = '{{%invoice}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE $this->tableName AUTO_INCREMENT = 1000;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return true;
    }
}
