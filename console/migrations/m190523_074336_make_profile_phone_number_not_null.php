<?php

use console\models\BaseMigration;

/**
 * Class m190523_074336_make_profile_phone_number_not_null
 */
class m190523_074336_make_profile_phone_number_not_null extends BaseMigration
{

    public $tableName = '{{%user_profile}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'country_code', $this->string(8)->notNull());
        $this->alterColumn($this->tableName, 'phone_number', $this->string(50)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return true;
    }
}
