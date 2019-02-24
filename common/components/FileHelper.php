<?php 
namespace common\components; 

use Yii; 

class FileHelper
{
	public $fileName; 

	//Получаем данные из параметров приложения
	public function __construct(){
		$this->fileName = Yii::$app->params['fileName']; 
	}


	//Записываем данные в файл
	public function writeInFile($data){

		 $filePath = Yii::$app->basePath.'/upload/'.$this->fileName; 
		 $data = $data."\r\n"; 
		 file_put_contents($filePath, $data, FILE_APPEND); 
	}
}