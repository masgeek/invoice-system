<?php


namespace console\models;


use Yii;
use yii\db\Migration;

/**
 *
 * @property array|string[] $tables
 */
class BaseMigration extends Migration
{

    public $tableOptions;

    public $tableName;
    public $refTableName;

    public $filePath;

    public $excludedTables = ['migration', 'users', 'authorization_codes', 'access_tokens'];

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->filePath = Yii::getAlias('@console') . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
    }

    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }

    /**
     * @return array|string[]
     */
    public function getTables()
    {
        $cleanedTables = [];
        $connection = Yii::$app->db;
        $dbSchema = $connection->schema;
        $tables = $dbSchema->getTableNames();//returns array of tbl schema's
        foreach ($tables as $tableName) {
            $noPrefix = str_replace($connection->tablePrefix, '', $tableName);
            if (!in_array($noPrefix, $this->excludedTables)) { //dont add the migration tracking table
                $cleanedTables[] = "{{%{$noPrefix}}}";
            }
        }
        return $cleanedTables;
    }
}