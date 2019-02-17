<?php 

namespace frontend\controllers; 

use yii\web\Controller; 
use frontend\models\News; 

class NewsController extends Controller 
{

	public function actionNewsList(){

		 //Получаем данные из Модели
		 $list = News::getNewsList(); 

		 //Рендерим шаблон и передаем в данные туда
		 return $this->render('newslist', [
		 	'list' => $list
		 ]);
	}
}