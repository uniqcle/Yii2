<?php 

namespace frontend\models; 

use Yii; 

class News 
{
	public static function getNewsList($maxNewsInList){

		//Формируем запрос
		$sql = "SELECT * FROM news LIMIT ".$maxNewsInList; 

		//Получаем данные из БД
		$arResult =  Yii::$app->db->createCommand($sql)->queryAll();

		//Создается во время запуска приложения, поскольку мы его зарегестрировали в качестве компонента Yii
		$helper2 = Yii::$app->stringHelper;

		//Делаем проверку на массив
		if(!empty($arResult) && is_array($arResult)){

			//Проходимся по массиву и обрезаем лишний текст, используя метод getShortString()
			foreach($arResult as &$arItem){
				$arItem['content'] = $helper2->getShortString($arItem['content'], 200);
				// или так 
				//$arItem['content'] = Yii::$app->stringHelper->getShortString($arItem['content'], 200);
		    }

		}

		return $arResult;
	}
}