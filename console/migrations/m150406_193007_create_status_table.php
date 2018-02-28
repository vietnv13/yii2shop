<?php

use yii\db\Schema;
use yii\db\Migration;

class m150406_193007_create_status_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%status}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'color' => Schema::TYPE_STRING . ' NOT NULL',
            'background' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%status}}');
    }
}
