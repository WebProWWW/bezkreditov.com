<?php

namespace app\migrations;

use yii\db\Migration as YiiMigration;
use yii\db\Exception as ExceptionDataBase;
use yii\db\ColumnSchemaBuilder;

/**
 * Class Migration
 * @package app\migrations
 *
 * @property string $options
 */
class Migration extends YiiMigration
{
    /**
     * @return string
     */
    public function getOptions()
    {
        if ($this->db->driverName === 'mysql') {
            return 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        return '';
    }

    /**
     * @param string $table
     * @return bool
     */
    public function removeTable(string $table)
    {
        $db = $this->db;
        try {
            $db->createCommand('SET foreign_key_checks = 0')->execute();
            $tableName = $db->tablePrefix . $table;
            if ($db->getTableSchema($tableName, true) !== null) {
                $this->dropTable($tableName);
            }
            $db->createCommand('SET foreign_key_checks = 1')->execute();
            return true;
        } catch (ExceptionDataBase $exception) {
            echo 'error: ' . $exception->getMessage();
        }
        return false;
    }

    /**
     * @return ColumnSchemaBuilder
     */
    public function longText()
    {
        return $this->db->schema->createColumnSchemaBuilder('LONGTEXT');
    }
}