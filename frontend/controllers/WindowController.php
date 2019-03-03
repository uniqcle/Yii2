<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 
use frontend\models\Window; 

class WindowController extends Controller 
{	

	//Заказ окна
	public function actionOrder(){

		$model = new Window(); 

		$model->scenario = Window::SCENARIO_WINDOW_ORDER; 

		


		if ( Yii::$app->request->isPost ){

			$formData = Yii::$app->request->post();


			$model -> attributes = $formData; 

   			if ( $model-> validate() ) {

	
				Yii::$app->session->setFlash('success', 'Мы приняли ваш заказ!');		

				$model->sendmail();	 
			}

		}


		return $this->render('order', [
			'model' => $model
		]);
	}
}