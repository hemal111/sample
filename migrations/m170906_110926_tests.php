<?php

use yii\db\Migration;

class m170906_110926_tests extends Migration
{
    public function safeUp()
    { 
        return $this->createTable('posts', array(
        'id' => 'INT PRIMARY KEY AUTO_INCREMENT',
        'title' => 'VARCHAR(255)',
        'data' => 'TEXT',
        'create_time' => 'INT',
        'update_time' => 'INT'
    ));

    }

    public function safeDown()
    {
            return $this->dropTable('posts');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170906_110926_tests cannot be reverted.\n";

        return false;
    }
    */
}
