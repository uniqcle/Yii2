<?php 
namespace frontend\controllers; 

use Yii; 
use yii\web\Controller; 
use frontend\models\Stuff;

class StuffController extends Controller
{

	public $firstName; 
	public $lastName; 
	public $middleName; 
	public $salary; 
	public $email; 

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

	/**
	 * Форма регистрации сотрудника
	 */
	public function actionRegister(){

		//Создаем экземпляр модели
		$model = new Stuff();

		//Указываем какой сценарий должен быть
		$model->scenario = Stuff::SCENARIO_STUFF_REGISTER; 


		if( Yii::$app->request->isPost ){

			//Получаем данные
		    $formData = Yii::$app->request->post();

		    //Передаем в модель
		    /* Если полей не много
			$model -> firstName = $formData['firstName'];
			$model -> lastName = $formData['lastName'];
			*/ 
			//Массовое присваивание
			$model -> attributes = $formData; 

			if( $model-> validate() ){
				Yii::$app->session->setFlash('registerStatus', 'Вы успешно зарегестрировались!');
			}
		}

		return $this->render('register', [
		   'model' => $model
		]);
	}


	/** 
	* Редактирование данных сотрудника
	*/
	public function actionUpdate(){

		$model = new Stuff(); 

		$model->scenario = Stuff::SCENARIO_STUFF_UPDATE; 

		$formData = Yii::$app->request->post();

		if( Yii::$app->request->isPost ){

			$model->attributes = $formData; 

			if( $model-> validate() && $model-> save() ){

				Yii::$app->session->setFlash('success', 'Данные успешно обновлены!'); 
			}

		}

		return $this->render('update', [
			'model' => $model
		]);
	}
}