<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m190303_051719_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //$this->renameColumn('fio', 'firstName', $this->string());
        $this->addColumn('employees', 'lastName', $this->string(255));
        $this->addColumn('employees', 'middleName', $this->string(255));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('employees', 'fio', 'firstName');
    }
}
