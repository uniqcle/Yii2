<?php 

namespace frontend\controllers; 

//Подключили глобальный класс Yii
use Yii; 
use yii\web\Controller; 

class TestController extends Controller
{
	

	public function actionIndex(){

		//Получили данные свойства params глобального объекта приложения
		$email = Yii::$app->params['adminEmail']; 

		//Передали во View
		return $this->render('index', [
			'emailAdmin' => $email,
		]);
	}
}