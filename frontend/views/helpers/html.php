<?php 
use yii\helpers\Html; 
?>

<div class="container">
	<?php 
	//Html helper используется для формирования html-тегов
	echo Html::tag('p', 'Обычный текст в параграфе');
	echo Html::tag('div', 'Текст в div\'ax');

	echo Html::beginTag('div');
	echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
	echo Html::endTag('div');

	//Генерация выпадающего списка
	$arCities = [
		'1' => 'Новосибирск', 
		'2' => 'Омск', 
		'3' => 'Барнаул', 
		'4' => 'Москва', 
		'5' => 'Владивосток'
	]; 
		//Параметры
		// [Название эл-та html], кот. будет сгенерирован
		// Массив, кот. содержит активные элементы []
		// arCities
	echo Html::dropDownList('city_id', [], $arCities);

	echo Html::radioList('city_id', [], $arCities);

	echo Html::checkboxList('city_id', [], $arCities);

	//Подключение изображения
	echo Html::img('@images/burger.jpg', ['alt' => 'Описание изображения']);

	?>
</div>