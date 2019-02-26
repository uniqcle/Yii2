<?php 
namespace console\models; 

use Yii; 

class Employees 
{

	public static function getEmployees(){
		$sql = "SELECT * FROM employees; "; 

		return Yii::$app->db->createCommand($sql)->queryAll();

	}
}