<?php 

if( $model->hasErrors() ){
	debug( $model->getErrors() );
}
if ( Yii::$app->session->hasFlash('validateStatus') ){
	echo Yii::$app->session->getFlash( 'validateStatus' );
}

?>


<form class="form-inline" method = "post">
 
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Data for validation</label>
    <input type="text" name = "testData" class="form-control" id="inputPassword2" >
  </div>
  <button type="submit" class="btn btn-primary mb-2">Validate</button>
</form>