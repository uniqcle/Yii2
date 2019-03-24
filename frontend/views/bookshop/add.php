<?php 
/* @var $this yii\web\View */ 
/* @var book frontend\models\Book */ 

use yii\helpers\Html; 
use yii\widgets\ActiveForm; 

?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<?php $form = ActiveForm::begin();  ?>

			<?php echo $form->field($book, 'title'); ?>

			<?php echo $form->field($book, 'isbn'); ?>

			<?php echo $form->field($book, 'ydate'); ?>

			<?php echo Html::submitButton('Save', [
				'class' => 'btn btn-info'
			]) ?>

			<?php ActiveForm::end(); ?>
			
		</div>
	</div>
</div>
