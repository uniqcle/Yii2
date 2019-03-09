<?php 
namespace frontend\widgets\getlist; 

use Yii; 
use yii\base\Widget; 

use frontend\models\News; 

class GetList extends Widget 
{
	//По умолчанию ShowLimit (переданные из виджета) не задан
	public $showLimit = null; 

	public function run(){
 		
 		//maxNewsInList - берутся из параметров
		$maxNewsInList = Yii::$app->params['maxNewsInList']; 
 		
 		//Если данные из виджета есть, то их присваиваем maxNewsInList, если нет, то берем из параметров по-умолч. 
		if( $this->showLimit ){
			$maxNewsInList = $this->showLimit;
		}
 
		$newsList = News::getNewsList($maxNewsInList); 

		return $this->render('index', [
			'newsList' => $newsList
		]);
	}
}