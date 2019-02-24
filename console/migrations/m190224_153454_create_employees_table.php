<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m190224_153454_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
             'id'         => $this->primaryKey(),
             'fio'        => $this->string()->notNull(),
             'birth'      => $this->date("Y-m-d"), 
             'city'       => $this->string(255), 
             'date_work'  => $this->date("Y-m-d"),
             'experience' => $this->integer(),
             'position'   => $this->string(),
             'num_depart' => $this->string(),
             'code'       => $this->integer(),
             'email'      => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}