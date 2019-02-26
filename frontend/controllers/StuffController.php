<?php 
namespace frontend\controllers; 

use yii\web\Controller; 
use frontend\models\Stuff;

class StuffController extends Controller
{
	public function actionIndex(){
		
		$stuff = new Stuff(); 

		$stuff -> firstName = 'Kirill'; 
		$stuff -> lastName = 'Anuchkin'; 
		$stuff -> middleName = 'Andreevich'; 
		$stuff -> salary = 2000; 

		/* Класс Stuff расширяет класс Model, в который в свою очередь входит "Интерфейс ArrayAccess", кот. обеспечивает доступ к объектам в виде массивов. */ 

		echo $stuff['firstName']; 
		echo '<hr>'; 

		/* Можно "обходить" с помощью foreach() */ 
		foreach($stuff as $attributes => $value){
			echo "Аттрибут: $attributes, значение: $value</br>"; 
		}

		echo '<hr>'; 
		//С помощью метода toArray() представляем аттрибуты в виде массива
		$array = $stuff->toArray();
		debug($array); 

		echo '<hr>'; 

		//Получение с помощью getAttributes()
		debug($stuff->getAttributes());

		echo '<hr>'; 

		//Получение аттрибутов с помощью свойства
		debug($stuff->attributes);


	}
}