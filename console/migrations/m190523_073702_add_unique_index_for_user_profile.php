<?php

use console\models\BaseMigration;

/**
 * Class m190523_073702_add_unique_index_for_user_profile
 */
class m190523_073702_add_unique_index_for_user_profile extends BaseMigration
{
    public $tableName = '{{%user_profile}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('user-profile-uk', $this->tableName, ['user_id'], true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return true;
    }
}
