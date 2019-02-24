<?php

use yii\db\Migration;

/**
 * Class m190224_155421_edit_employees
 */
class m190224_155421_edit_employees extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employees', 'salary', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190224_155421_edit_employees cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_155421_edit_employees cannot be reverted.\n";

        return false;
    }
    */
}
