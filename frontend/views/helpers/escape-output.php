<?php 
use yii\helpers\Html; 
?>

<div class="container">
	 <?php foreach($comments as $comment): ?>
	 	<?php echo Html::tag('h4', $comment['author']); ?>
	 	<?php echo Html::tag('p', Html::encode( $comment['text']) ); ?>
	 <hr>
	 <?php endforeach;  ?>

</div>