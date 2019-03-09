<?php

/* @var $this yii\web\View */

use yii\helpers\Url; 
//use yii\helpers\Url; 

use frontend\widgets\getList\GetList; 
use frontend\widgets\EmailList\EmailList; 
use frontend\widgets\maxSalary\MaxSalary; 


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to(['newsletter/subscribe']);?>">Подписаться</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>
                    
                    <?=getList::widget(['showLimit' => 3]); ?>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>
                    <?php echo MaxSalary::widget(['maxEmployeeDefault' => 3]); ?>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Email Widget</h2>

                <p>
                    <?php echo EmailList::widget(); ?>
                </p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
