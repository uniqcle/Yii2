<?php 

namespace console\controllers;

class SimpleController extends \yii\console\Controller 
{	
	//Консольная команда для запуска: php yii simple/hello
	public function actionHello(){
		echo 'Hello, World!'; 
	}
}