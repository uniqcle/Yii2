<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url; 

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<p>This is the About page. You may modify the following file to customize its content:</p>
    		</div>
    		<div class="col-md-6">
    			<?php foreach($newsList as $newsItem): ?>
    			<a href="<?=Url::to(['site/view', 'id' => $newsItem['idnews']]); ?>"><?=$newsItem['title']; ?></a></br>

    		    <?php endforeach;  ?>
    		</div>
    	</div>
    </div>

    

     <code><?= __FILE__ ?></code>
</div>
