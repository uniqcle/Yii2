
<h2><?=$itemNew['title'] ?></h2>
<p><?=$itemNew['content'] ?></p>


<a href = "<?=Yii::$app->urlManager->createUrl(['news/news-list']); ?>" class = "btn btn-info">Back</a>