<?php 
namespace console\models; 

use Yii; 

class Sender 
{

	public static function run($listNews, $subscribers){

		$count = 0; 

		foreach($subscribers as $subscriber){

			$result = Yii::$app->mailer->compose('/mailer/newsList', [
				'listNews' => $listNews
			])
                ->setFrom('uniqcle@yandex.ru')
                ->setTo($subscriber['email'])
                ->setSubject('Тестовый заголовок письма')
                ->send();

            if( $result ){
            	$count++; 
            }

		}

	return $count;
	}
}