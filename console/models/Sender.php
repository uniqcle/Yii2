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

	public static function salary($employees){

		$sendTime = Yii::$app->formatter->asDatetime(date('d.m.Y'));

		foreach($employees as $employee):

			$result = Yii::$app->mailer->compose('/mailer/employeesalary', [
				'employee' => $employee, 
				'sendTime' => $sendTime
			])
                ->setFrom('uniqcle@yandex.ru')
                ->setTo($employee['email'])
                ->setSubject('Начисление зар.платы')
                ->send();

		endforeach; 

	return $result;
	}
}