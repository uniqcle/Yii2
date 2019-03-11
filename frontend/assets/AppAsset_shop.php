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
        'css/site.css',
        'css/bootstrap.min.css', 
        'css/main.css',
        'css/font-awesome.min.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/animate.css',
        'css/responsive.css',

    ];
    public $js = [
    "js/jquery.js",  
    "js/bootstrap.min.js",  
    "js/jquery.scrollUp.min.js",
    "js/price-range.js",
    "js/jquery.prettyPhoto.js",
    "js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];
}
