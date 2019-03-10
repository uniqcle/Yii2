<?php 
namespace frontend\controllers; 

use yii\web\Controller; 
use yii\helpers\Html; 

class HelpersController extends Controller  
{

	//Html helper
	public function actionHtml(){


		return $this->render('html');
	}

	//Экранирование вывода html хэлпера
	public function actionEscapeOutput(){

		$comments = [

			[
				'id' => 1, 
				'author' => 'Кирилл',
				'text' => 'Привет, я Кирилл'
			],
			[
				'id' => 2,
				'author' => 'Андрей',
				'text' => 'Привет, я Андрей'
			],
			[
				'id' => 3,
				'author' => 'Алина',
				'text' => 'Привет, <script>alert("Я Алина");</script>'
			]

		]; 

		return $this->render('escape-output', [
			'comments' => $comments
		]);
	}
}