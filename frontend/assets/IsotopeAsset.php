<?php 
namespace frontend\assets; 

use yii\web\AssetBundle; 

class IsotopeAsset extends AssetBundle 
{

	public $css = [
		'css/isotope/style.css'
	]; 
	public $js = [
		'js/jquery-latest.js', 
		'js/isotope/jquery.isotope.js', 
	]; 

	public $depends = [
		'yii\web\JqueryAsset'
	]; 
}