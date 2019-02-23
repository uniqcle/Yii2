<?php

use yii\db\Migration;

class m190223_130854_create_table_subscribers extends Migration
{

    public function safeUp()
    {
        $sql = "CREATE TABLE subscribers (order_id INT AUTO_INCREMENT PRIMARY KEY, customer_id INT, amount DOUBLE );"; 

        Yii::$app->db->createCommand($sql)->execute();

    }


    public function safeDown()
    {
        $sql = "DROP TABLE subscribers;"; 
        Yii::$app->db->createCommand($sql)->execute();
    }

}
