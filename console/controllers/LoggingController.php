<?php 
namespace console\controllers; 


use Yii; 

class LoggingController extends \yii\console\Controller
{
	/***********************************
	 * Запись текущей даты в файл
	 **********************************/
	public function actionMytime(){
		//$formatter = \Yii::$app->formatter;
		$curTime = Yii::$app->formatter->asDatetime(date('d.m.Y H:i:s'));

		echo Yii::$app->FileHelper->writeInFile($curTime);
	}
}