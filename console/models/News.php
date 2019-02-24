<?php 
namespace console\models; 

use Yii; 
use common\components\StringHelper;

class News
{
	const STATUS_NOT_SEND = 1; 

	/**
	 * Получение списка новостей
	 */
	public static function getList(){
		
		$sql = "SELECT * FROM news WHERE status = ".self::STATUS_NOT_SEND;
		
		$result =  Yii::$app->db->createCommand($sql)->queryAll();
		
		return self::prepareList($result);
	}

	/**
	 * Подготовка новостей
	 */
	public static function prepareList($result){
		
		if(!empty($result) && is_array($result)){
			
			foreach($result as &$item){
				$item['content'] = Yii::$app->StringHelper->getShortString($item['content']);
			}

		}
	return $result;
	}

	/***************************
	 * Изменение статуса новости
	 ***************************/
	public static function changeStatus($listNews){
		
		if(!empty($listNews) && is_array($listNews)){

			foreach($listNews as $item){

				$sql = "UPDATE news SET status=2 WHERE idnews={$item['idnews']};"; 

				Yii::$app->db->createCommand($sql)->execute();
			}

		}
	}
}

 