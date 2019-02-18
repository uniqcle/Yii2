<?php 

namespace frontend\components; 

use Yii; 

class StringHelper
{
	public $limit; 

	public function __construct(){
		$this->limit = Yii::$app->params['limitContent']; 
	}

	//Укорачиваем описание до 20 символов
	public function getShortString($string, $limit = null){

		if($limit == null){
			$limit = $this->limit;
		}

		return substr($string, 0, $limit);
	}
}