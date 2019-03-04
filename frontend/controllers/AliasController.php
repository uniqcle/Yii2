<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 

class AliasController extends Controller 
{

	public function actionExample(){

		//Устанавливаем псевдоним
		Yii::setAlias('@files', '/var/www/project/frontend/web/files');

		//$result = mkdir('/var/www/project/frontend/web/files/test1');

		//Получаем псевдоним @files
		//$result = mkdir(Yii::getAlias('@files').'/test2');

 		$result = mkdir( Yii::getAlias('@upload').'/test3' );

 		echo Yii::getAlias('@photos');

		return $result;  
	}
}