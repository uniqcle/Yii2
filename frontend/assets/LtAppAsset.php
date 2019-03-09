<?php 
namespace frontend\assets; 

use yii\web\AssetBundle; 
use yii\web\View; 

class LtAppAsset extends AssetBundle
{
	public $css = [];

	public $js = [
        "js/html5shiv.js",
        "js/respond.min.js"
	]; 

	public $cssOptions = []; 

	public $jsOptions = [
		
		'condition' => 'lt IE 9', 
		'position' => View::POS_HEAD
	]; 


}