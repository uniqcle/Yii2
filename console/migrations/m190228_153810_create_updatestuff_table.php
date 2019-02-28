<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%updatestuff}}`.
 */
class m190228_153810_create_updatestuff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%updatestuff}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%updatestuff}}');
    }
}
