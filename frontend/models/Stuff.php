<?php 
namespace frontend\models;

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

	//Определяем сценаии
	public function scenarios(){

		return [
			self::SCENARIO_STUFF_REGISTER => ['firstName', 'lastName', 'middleName', 'email'], 
			self::SCENARIO_STUFF_UPDATE => ['firstName', 'lastName', 'middleName']
		]; 
	}

	//Правила валидации
	public function rules(){

		return [
			[['firstName', 'lastName', 'email'], 'required'],
			[['email'], 'email'], 
			[['firstName'], 'string', 'min'=> 2],
			[['lastName'], 'string', 'min'=> 3], 
			[['middleName'], 'required', 'on' => self::SCENARIO_STUFF_UPDATE] //Правило для отдельного сценария
		]; 

	}

	public function save(){

		return true; 
	}


}