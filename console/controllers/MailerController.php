<?php 

namespace console\controllers; 

use Yii; 
use console\models\News;
use console\models\Subscribers; 
use console\models\Sender;

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

        public function actionMailing(){
                //Получение списка новостей
                $listNews = News::getList();

                //Получение подписчиков
                $subscribers = Subscribers::getSubscribers();

                //Отправка письма
                $result = Sender::run($listNews, $subscribers);

               //По результатам отправки писем, меняем статус новостей
               if( $result ){
                News::changeStatus($listNews);
                  echo 'Записи обновлены '. $result;
               } 

        }
}