<?php 
namespace frontend\models; 

use yii\db\ActiveRecord; 

class Book extends ActiveRecord
{
	public static function tableName(){

		return '{{books}}'; 
	}

	public function rules(){

		return [
			[['title', 'isbn'], 'required'], 
		]; 
	}
}