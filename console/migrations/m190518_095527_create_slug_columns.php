<?php

use console\models\BaseMigration;

/**
 * Class m190518_095527_create_slug_columns
 */
class m190518_095527_create_slug_columns extends BaseMigration
{
    public $excludedTables = ['migration', 'authorization_codes', 'access_tokens'];

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach ($this->getTables() as $tableName) {
            $this->addColumn($tableName, 'slug', $this->string(30)->unique());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        foreach ($this->getTables() as $tableName) {
            $this->dropColumn($tableName, 'slug');
        }
    }
}
