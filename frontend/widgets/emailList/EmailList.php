<?php 
namespace frontend\widgets\emaillist; 

use Yii; 
use yii\base\Widget; 
use frontend\models\Stuff; 

class EmailList extends Widget 
{
	public function run(){
		 $emailList = Stuff::getEmails();

		 return $this->render('template', [
		 	'emailList' => $emailList
		 ]);
	}
}


 ?>