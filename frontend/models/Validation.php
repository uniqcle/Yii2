<?php 
namespace frontend\models; 

use Yii; 
use yii\base\Model; 

class Validation extends Model
{
	public $testData; 

	public function rules(){

		return [
			//[['testData'], 'required'], 
			//[['testData'], 'integer'], 
			//[['testData'], 'string', 'min' => 2],
			//[['testData'], 'in', 'range' => [1,2,3] ]
			//[['testData'], 'date', 'format' => 'php:Y-m-d'], 
			//[['testData'], 'match', 'pattern' => '/^[a-bA-B0-5_-]+$/']

		];
	}
}