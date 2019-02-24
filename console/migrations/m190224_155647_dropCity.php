<?php

use yii\db\Migration;

/**
 * Class m190224_155647_dropCity
 */
class m190224_155647_dropCity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employees', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190224_155647_dropCity cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_155647_dropCity cannot be reverted.\n";

        return false;
    }
    */
}
