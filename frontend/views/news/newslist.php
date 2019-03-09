<?php 
//Подключение Asset'a
use frontend\assets\IsotopeAsset; 

IsotopeAsset::register($this); 
 
?>



<!-- 

Yii::$app->urlManager->createUrl(['news/view', 'id' => $item['idnews']]);

либо так

yii\helpers\Url; 

Url::to(['news/view', 'id' => $item['idnews']]);

--> 

 

<?php foreach($list as $item): ?>

	<?php if($item['status'] > 0): ?>

		<h3>
			<a href = "<?=Yii::$app->urlManager->createUrl(['news/view', 'id' => $item['idnews']]); ?>">
				<?=$item['title'] ?>
			</a>
		</h3>
		<p><?=$item['content'] ?></p>

	<?php endif;  ?>

<?php endforeach; ?>

 