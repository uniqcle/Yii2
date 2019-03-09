<?php 
namespace frontend\assets; 

use yii\web\AssetBundle; 
use yii\web\View; 

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

	//Указываем в какую область вставлять
 	public $jsOptions = [
		//'position' => View::POS_HEAD  //Регистрировать скрипты в шапке сайта. Не забываем!  use yii\web\View; 
		'position' => View::POS_END
	];  
}