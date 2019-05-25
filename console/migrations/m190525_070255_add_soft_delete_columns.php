<?php

use yii\db\Migration;

/**
 * Class m190525_070255_add_soft_delete_columns
 */
class m190525_070255_add_soft_delete_columns extends \console\models\BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach ($this->getTables() as $tableName) {
            $this->addColumn($tableName, 'is_deleted', $this->boolean()->defaultValue(0));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        foreach ($this->getTables() as $tableName) {
            $this->dropColumn($tableName, 'is_deleted');
        }
    }
}
