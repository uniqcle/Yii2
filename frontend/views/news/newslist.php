<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 651fb7b01e67ba4490a8e5e9a7bd8f74d674a90c
<!-- 

Yii::$app->urlManager->createUrl(['news/view', 'id' => $item['idnews']]);

либо так

yii\helpers\Url; 

Url::to(['news/view', 'id' => $item['idnews']]);

--> 

<?php yii\helpers\Url;  ?>

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


<<<<<<< HEAD
=======
<?php 

foreach($list as $item):
	if($item['status'] > 0){
		echo '<h3>'.$item['title'].'</h3>'; 
		echo '<p>'.$item['content'].'</p>'; 
	}

endforeach; 
>>>>>>> parent of 2466a4b... Работа с компонентом urlManager
=======
>>>>>>> 651fb7b01e67ba4490a8e5e9a7bd8f74d674a90c
