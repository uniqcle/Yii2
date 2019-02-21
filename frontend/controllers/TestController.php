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


	public function actionMail(){

		//в тестовом режиме. реально письма не отправляет, а помещает в папку runtime/mail
		$result = Yii::$app->mailer->compose()
                ->setFrom('uniqcle@yandex.ru')
                ->setTo('develop2207.nsk@gmail.com')
                ->setSubject('Тестовый заголовок письма')
                ->setTextBody('Тестовое сообщение')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();

        if($result){
        	echo 'Письмо успешно отправлено'; 
        }
	}
}