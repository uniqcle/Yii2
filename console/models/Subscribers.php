<?php 
namespace console\Models; 

use Yii; 

class Subscribers 
{
	
	//Получаем данные о подписчиках
	public static function getSubscribers(){
		$sql = "SELECT * FROM subscribers;"; 
		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}