<?php 
namespace frontend\controllers; 

use yii\web\Controller; 
use frontend\models\simpletrait\Human; 
use frontend\models\simpletrait\Animal;

class TraitController extends Controller
{
	public function actionIndex(){
		$human = new Human();
		$animal = new Animal();

		$human->walk();
		$animal->walk();
	}
}