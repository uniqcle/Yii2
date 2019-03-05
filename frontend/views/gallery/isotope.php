<?php 
use frontend\assets\IsotopeAsset; 

//Принимает на вход экземпляр текущего объекта View
IsotopeAsset::register($this); 

//Подключаем scripts.js, который идет после jquery и isotope
//Это в том случае, если scripts.js не принадлежит IsotopeAsset
$this->registerJsFile('@web/js/isotope/scripts.js', ['depends' => [
	IsotopeAsset::className()
]]);

 ?>
 

<h1>Gallery</h1>

 
<div class="portfolioFilter">

	<a href="#" data-filter="*" class="current">All Categories</a>
	<a href="#" data-filter=".people">People</a>
	<a href="#" data-filter=".places">Places</a>
	<a href="#" data-filter=".food">Food</a>
	<a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

	<div class="objects">
		<img src="/files/photos/watch.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/files/photos/surf.jpg" alt="image">
	</div>	

	<div class="food">
		<img src="/files/photos/burger.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/files/photos/subway.jpg" alt="image">
	</div>

	<div class="places objects">
		<img src="/files/photos/trees.jpg" alt="image">
	</div>

	<div class="people food objects">
		<img src="/files/photos/coffee.jpg" alt="image">
	</div>

	<div class="food objects">
		<img src="/files/photos/wine.jpg" alt="image">
	</div>	
	
	<div class="food">
		<img src="/files/photos/salad.jpg" alt="image">
	</div>	
	
</div>


