<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 
use frontend\models\Subscribe; 

class NewsletterController extends Controller
{

	public function actionSubscribe(){

		$model = new Subscribe();

		if( Yii::$app->request->isPost ){

			$formData = Yii::$app->request->post();

			$model->email = $formData['email'];

			if( $model->validate()  && $model->save() ){
				//Установка флеш-сообщения при успешном сохрании
				//1 вариант. 
				//Yii::$app->session->setFlash('subscribeStatus', 'Вы успешно подписались на рассылку!');

				//2 вариант
				Yii::$app->session->setFlash('success', 'Вы успешно подписались!');
			}
		}

		 return $this->render('subscribe', [
		 	'model' => $model
		 ]);
	}
}