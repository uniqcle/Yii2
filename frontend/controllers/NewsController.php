<?php 

namespace frontend\controllers; 

use Yii; //Подключили глобальный класс приложения Yii
use yii\web\Controller; 
use frontend\models\News; 

class NewsController extends Controller 
{

	public function actionNewsList(){

		 $maxNewsInList =  Yii::$app->params['maxNewsInList']; //Получили данные из массива параметров.

		 //Получаем данные из Модели
		 $list = News::getNewsList($maxNewsInList);  //Передаем туда параметры 

		 //Рендерим шаблон и передаем в данные туда
		 return $this->render('newslist', [
		 	'list' => $list
		 ]);
	}
 
	/**
	 * Генерация конкретной новости
	 * @param id id-шник новости
	 * @return 
	 */
	public function actionView($id){


		$itemNew = News::getItemNew($id);

		return $this->render('view',[ 
	    	'itemNew' => $itemNew
		]);
	}
 
}