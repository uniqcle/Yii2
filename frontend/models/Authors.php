<?php

namespace frontend\models;

use Yii;

 
class Authors extends \yii\db\ActiveRecord
{
 
    public static function tableName()
    {
        return '{{authors}}';
    }

 
    public function rules()
    {
        return [
            [['rating'], 'integer'],
            [['first_name', 'last_name'], 'string'],
        ];
    }
 
}
