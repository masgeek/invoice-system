<?php

use console\models\BaseMigration;

class m190124_110200_add_verification_token_column_to_user_table extends BaseMigration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'verification_token', $this->string()->defaultValue(null));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
    }
}
