<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 

class GalleryController extends Controller 
{

	public function actionIsotope(){

		//Отрубаем в конкретном экшене загружаемый по умолчанию скрипт jQuery, а IsotopeAsset свой добавляем
		Yii::$app->assetManager->bundles = [
		     'yii\web\JqueryAsset' => false
		];  

		 return $this->render('isotope');
	}
}