<?php 

namespace frontend\models; 

use Yii; 
use frontend\components\StringHelper; 

class News 
{
	public static function getNewsList($maxNewsInList){

		//Формируем запрос
		$sql = "SELECT * FROM news LIMIT ".$maxNewsInList; 

		//Получаем данные из БД
		$arResult =  Yii::$app->db->createCommand($sql)->queryAll();

		//Формируем объект класса StringHelper()
		$helper = new StringHelper();

		//Делаем проверку на массив
		if(!empty($arResult) && is_array($arResult)){

			//Проходимся по массиву и обрезаем лишний текст, используя метод getShortString()
			foreach($arResult as &$arItem){
				$arItem['content'] = $helper->getShortString($arItem['content'], 200);
		    }

		}

		return $arResult;
	}
}