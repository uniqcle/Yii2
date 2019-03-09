<?php 
namespace frontend\models;

use Yii; 
use yii\base\Model; 

class Stuff  extends Model 
{
	const SCENARIO_STUFF_REGISTER = 'stuff_register'; 
	const SCENARIO_STUFF_UPDATE = 'stuff_update'; 

	public $firstName; 
	public $lastName; 
	public $middleName; 
	public $salary; 
	public $email; 
	public $bday;
	public $wday; 
	public $city; 
	public $position; 
	public $number_id; 
 

	//Определяем сценаии
	public function scenarios(){

		return [
			self::SCENARIO_STUFF_REGISTER => ['firstName', 'lastName', 'middleName', 'bday',  'wday', 'city', 'position', 'number_id', 'email'], 
			self::SCENARIO_STUFF_UPDATE => ['firstName', 'lastName', 'middleName']
		]; 
	}

	//Правила валидации
	public function rules(){

		return [
			[['firstName', 'lastName', 'wday', 'city', 'email'], 'required'],
			[['email'], 'email'], 
			[['firstName'], 'string', 'min'=> 2],
			[['lastName'], 'string', 'min'=> 3], 
			[['middleName'], 'required', 'on' => self::SCENARIO_STUFF_UPDATE], //Правило для отдельного сценария
			[['bday'], 'date', 'format' => 'php:Y-m-d'],
			[['wday'], 'date', 'format' => 'php:Y-m-d'],
			[['city'], 'integer'],
			[['position'], 'string', 'min' => 5],
			[['number_id'], 'integer']
		]; 

	}

	// Регистрация нового сотрудника
	public function save(){

		 $sql = "INSERT INTO employees (id, `firstName`, `lastName`, `middleName`, `bday`, `wday`, `city`, `position`, `number_id`, `email`) VALUES (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->bday}', '{$this->wday}', '{$this->city}', '{$this->position}', '{$this->number_id}', '{$this->email}'); "; 

		return Yii::$app->db->createCommand($sql)->execute();
	}

	public static function getEmails(){
		$sql = "SELECT * FROM subscribers"; 

		return Yii::$app->db->createCommand($sql)->queryAll();
	}


	public static function getMaxSalary($maxEmployee){

		$sql = "SELECT id, firstName from employees WHERE salary IN (SELECT salary FROM employees GROUP BY salary DESC) LIMIT ".$maxEmployee.";"; 

		return Yii::$app->db->createCommand($sql)->queryAll();
	}

 


}