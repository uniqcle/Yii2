
<?php 

//Во View передается экземпляр класса View
$this->title = 'Подписка на новости'; 

	use yii\helpers\Url; 
?>

<?php 
	
	/* 1 вариант вывода Flash сообщений
	if( Yii::$app->session->hasFlash('subscribeStatus') ){
		echo Yii::$app->session->getFlash('subscribeStatus');
	}
	*/ 
	
 ?>

<?php 
//Вывод ошибок при валидации
if( $model-> hasErrors() ){
	debug($model->getErrors()); 
}

?>

<form  action = "<?=Url::to(['newsletter/subscribe']);?>" method = "post">
  <div >
    <label  >Email</label>
    <div  >
      <input type="email" name = "email"  >
    </div>
  </div>
 
 
  <div  >
    <div >
      <button type="submit"  >Подписаться</button>
    </div>
  </div>
</form>