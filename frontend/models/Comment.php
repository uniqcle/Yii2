<?php 
namespace frontend\models; 

use Yii; 
use yii\base\Model; 

class Comment extends Model
{

	public $name; 
	public $email; 
	public $text; 

	public function rules(){

		return [
			[['name', 'text'], 'required'], 
			[['email'], 'email'],
			[['text'], 'string', 'length' => [2, 255]]
		]; 
	}

	public function save(){
		$sql = "INSERT INTO comments (id, `name`, `email`, `text`) VALUE  (null, '{$this->name}', '{$this->email}', '{$this->text}');  "; 

		return Yii::$app->db->createCommand($sql)->execute(); 
	}

	public static function getComments(){
		$sql = "SELECT * FROM comments"; 

		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}