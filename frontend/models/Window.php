<?php 
namespace frontend\models; 

use Yii; 
use yii\base\Model; 

class Window extends Model 
{
	const SCENARIO_WINDOW_ORDER = 'window_order'; 

	public $width; 
	public $height; 
	public $chamber; 
	public $sash; 
	public $sash1; 
	public $color; 
	public $sill; 
	public $email; 
	public $name; 

	public function scenarios(){

		return [
			self::SCENARIO_WINDOW_ORDER => ['width', 'height', 'chamber', 'sash', 'sash1', 'sill', 'email', 'name'], 
		]; 
	}

	public function rules(){

		return [
			[['width', 'height', 'chamber', 'sash', 'sash1', 'sill', 'email', 'name'], 'required'], 
			[['width'], 'integer', 'min' => 70, 'max' => 210, 'message' => 'Неверный диапазон'],
			[['height'], 'integer', 'min' => 100, 'max' => 200, 'message' => 'Неверный диапазон'],
			[['chamber'], 'integer'], //Целое число
			[['sash'], 'integer', 'min' => 1, 'message' => 'целое число, не меньше 1'],
			[['sash1'], 'integer', 'min' => 1, 'message' => 'целое число, не больше общего количества створок'],
			[['email' ], 'email'], 
			[['name' ], 'string', 'length' => [2, 255]], 
		]; 
	}


	public function sendmail(){

		$result = Yii::$app->mailer->compose('/newsletter/sendmail', [
				'width' => $this->width, 
				'height' => $this->height, 
				'chamber' => $this->chamber, 
				'sash' => $this->sash, 
				'sash1' => $this->sash1, 
				'color' => $this->color, 
				'sill' => $this->sill, 
				'email' => $this->email, 
				'name' => $this->name

			])
                ->setFrom('uniqcle@yandex.ru')
                ->setTo('uniqcle@yandex.ru')
                ->setSubject('Новый заказ')
                ->send();


        return $result; 
	}
}