<?php 

use yii\helpers\Html; 
use yii\widgets\ActiveForm; 

?>


<div class="container">
	<div class="row">
		<h3>Добавление автора</h3>
		<div class="col-md-6 col-md-offset-2">
			
			<?php $form = ActiveForm::begin(); ?>

			<?php echo $form->field($author, 'first_name') ?>
			<?php echo $form->field($author, 'last_name'); ?>
			<?php echo $form->field($author, 'rating') ?>
			<?php echo $form->field($author, 'bday') ?>

			<?php echo Html::submitButton('Save', [
				'class' => 'btn btn-success'
			]); ?>

			<?php ActiveForm::end();  ?>

		</div> 
	</div>
</div>