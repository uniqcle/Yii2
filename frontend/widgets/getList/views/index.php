 <?php 
use yii\helpers\Url; 
?>

<?php foreach($newsList as $newsItem): ?>
 <h3><a href = "<?php echo Url::to(['news/view', 'id' => $newsItem['idnews']]); ?>"><?=$newsItem['title'] ?></a></h3>
 <?php endforeach; ?>
