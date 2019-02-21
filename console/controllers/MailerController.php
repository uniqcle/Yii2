<?php 

namespace console\controllers; 

use Yii; 

class MailerController extends \yii\console\Controller 
{

	public function actionSend(){

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
}