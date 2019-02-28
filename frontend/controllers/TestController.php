<?php 

namespace frontend\controllers; 

//Подключили глобальный класс Yii
use Yii; 
use yii\web\Controller; 
use frontend\models\Validation; 

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

		//Работает только в тестовом режиме. реально письма не отправляет, а помещает в папку runtime/mail
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

	public function actionValidation(){

		$model = new Validation(); 

		$formData = Yii::$app->request->post();

		if( Yii::$app->request->isPost ){
			$model->testData = $formData['testData'];

			if( $model->validate() ){
				Yii::$app->session->setFlash('validateStatus', 'Данные успешно валидированы!');
			}
		}

		return $this->render('validation', [
			'model' => $model
		]);
	}
}