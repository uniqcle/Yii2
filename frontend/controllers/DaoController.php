<?php 
namespace frontend\controllers; 

use Yii; 
use yii\base\Controller; 

class DaoController extends Controller 
{

	public function actionIndex(){
		

		//1 Создаем объект класса db и в конструкторе передаем параметры подключения
		$db = new \yii\db\Connection([
			'dsn' => 'mysql:host=localhost;dbname=yii2advanced', 
			'username' => 'remote', 
			'password' => 'remote', 
			'charset' => 'utf8'
		]); 

		//2 Создание объекта команды \yii\db\Command
		$sql = "SELECT * FROM cities"; 

		$command = new \yii\db\Command([
			'db' => $db, 
			'sql' => $sql
		]);

		//3 Выполнение команды 
		$arResult = $command->queryAll();

		////////////////////////////////////////////

		//или так в Yii2

		$arResult2 = Yii::$app->db->createCommand($sql)->queryAll();

		return $this->render('index', [
			'db' => $db
		]);
	}
}


/*Data access objects  //Объекты доступа к данным
Query Builder 
Active Records 
*/