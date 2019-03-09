<?php 
namespace frontend\widgets\maxsalary; 

use Yii; 
use yii\base\Widget; 
use frontend\models\Stuff; 

class MaxSalary extends Widget 
{
	public $maxEmployeeDefault = null; 

	public function run(){

		$maxEmployee = Yii::$app->params['maxEmployee']; 

		if( $this->maxEmployeeDefault ){
			$maxEmployee = $this->maxEmployeeDefault; 
		}

		$maxSalaryList = Stuff::getMaxSalary($maxEmployee); 

		return $this->render('template', [
			'maxSalaryList' => $maxSalaryList
		]);
	}
}


 ?>