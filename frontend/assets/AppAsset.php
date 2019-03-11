<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap/css/bootstrap.min.css',
        "css/css_blog/all.min.css", 


 
    ];
    public $js = [
    "js/jquery/jquery.min.js", 
    "js/bootstrap/js/bootstrap.bundle.min.js", 
   
 

    ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
