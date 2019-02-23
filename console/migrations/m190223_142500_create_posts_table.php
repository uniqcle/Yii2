<?php

use yii\db\Migration;

 
class m190223_142500_create_posts_table extends Migration
{
 
    public function safeUp()
    {
        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(200)->unique(),
            'text' => $this->string(),
            'author_id' => $this->integer(),
            'data' => $this->date("Y-m-d")
        ]);
    }
 
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
