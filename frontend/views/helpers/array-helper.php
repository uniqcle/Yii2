<?php 
use yii\helpers\ArrayHelper; 
use yii\helpers\Html; 
?>

<div class="container">
	 <?php 
	 	//Получаем колонку email из массива $stuffList
	 	$email = ArrayHelper::getColumn($stuffList, 'email');

	 	echo implode(' ,', $email);

	 	//Делаем выборку из массива по id (ключ) и firstName (значение)
	 	$dataList = ArrayHelper::map($stuffList, 'id', 'firstName');

	 	//Помещаем в dropDownList
	 	echo Html::dropDownList('name_list', [], $dataList );
	 ?>
</div>