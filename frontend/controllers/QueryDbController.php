<?php 

namespace frontend\controllers; 

use Yii; 
use yii\base\Controller; 

/*
queryAll()
queryColumn()
queryOne()
queryScalar()
*/

class QueryDbController extends Controller 
{

	public function actionQueryAll(){

		$sql = "SELECT * FROM cities;"; 

		$arResult = Yii::$app->db->createCommand($sql)->queryAll();

		debug( $arResult ); 

			
			/*Вывод:
						Array
				(
				    [0] => Array
				        (
				            [id] => 1
				            [cityName] => Москва
				        )

				    [1] => Array
				        (
				            [id] => 2
				            [cityName] => Омск
				        )

				    [2] => Array
				        (
				            [id] => 3
				            [cityName] => Новосибирск
				        )

				    [3] => Array
				        (
				            [id] => 4
				            [cityName] => Барнаул
				        )

				)*/
	}


	public function actionQueryOne(){

		$sql = "SELECT id, cityName FROM cities WHERE id = 1; "; 

		$arResult = Yii::$app->db->createCommand($sql)->queryOne();

		debug( $arResult ); 

		/*Вывод:
		Array
			(
			    [id] => 1
			    [cityName] => Москва
			)*/

	}

	public function actionQueryColumn(){

		$sql = "SELECT cityName FROM cities; "; 

		$arResult = Yii::$app->db->createCommand($sql)->queryColumn(); 

		debug( $arResult ); 

/*		Вывод:
		Array
		(
		    [0] => Москва
		    [1] => Омск
		    [2] => Новосибирск
		    [3] => Барнаул
		)*/


	}

	public function actionQueryScalar(){

		$sql = "SELECT COUNT(*) FROM cities; "; 

		$arResult = Yii::$app->db->createCommand($sql)->queryScalar();

		debug($arResult); 

		/*Вывод: 4*/
	}

	public function actionExecute(){

		$sql = "INSERT INTO cities	VALUES (null, 'Славгород'); "; 

		return Yii::$app->db->createCommand($sql)->execute();
	}
}