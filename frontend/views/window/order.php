<?php 
$this->registerMetaTag([
  'name' => 'Заказ окон', 
  'content' => 'На данной странице вы можете заказа окна'
]);

//Добавление хлебных крошек
$this->params['breadcrumbs'] = [
  'test1', 
  ['label' => 'test2', 'url' => ['site/index'] ],
  'test3'
];

?>

<?php 

if( $model -> hasErrors() ){
	debug ($model -> getErrors() );
}
?>



<div class="container">
	
<form method = "post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="width">Ширина  (от 70 до 210 см)</label>
      <input type="text" name = "width" class="form-control" id="width" placeholder="Ширина">
    </div>

    <div class="form-group col-md-6">
      <label for="height">Высота (от 100 до 200 см)</label>
      <input type="text" name = "height" class="form-control" id="height" placeholder="Высота">
    </div>
  </div>

 
 <div class="form-row">

    <div class="form-group col-md-6">
      <label for="height">Количество камер</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="chamber" id="chamber" value="1" checked>
          <label class="form-check-label" for="chamber">
            1
          </label>

          <input class="form-check-input" type="radio" name="chamber" id="chamber" value="2" checked>
          <label class="form-check-label" for="chamber">
            2
          </label>

          <input class="form-check-input" type="radio" name="chamber" id="chamber" value="3" checked>
          <label class="form-check-label" for="chamber">
            3
          </label>

        </div>

    </div>


    <div class="form-group col-md-6">
      <label for="sash">Общее количество створок (не меньше 1)</label>
      <input type="text" name = "sash" class="form-control" id="sash" placeholder="количество створок">
    </div>
 </div>


 <div class="form-row">
 	<div class="form-group col-md-6">
 	  <label for="sash1">количество поворотных створок (не больше общего количества створок)</label>
      <input type="text" name = "sash1" class="form-control" id="sash1" placeholder="количество поворотных створок ">
 	</div>

 	<div class="form-group col-md-1">
 		<label for="head">Цвет</label>
 		<input type="color" class="form-control"  id="color" name="color" value="#e66465">
    
 	</div>

 	 <div class="form-group col-md-5">
      <label for="sill">Наличие подоконника </label>
      <div class="form-check">
      	<input class="form-check-input" type="radio" name="sill" id="sill" value="да" checked>
          <label class="form-check-label" for="sill">
            да
          </label>

        <input class="form-check-input" type="radio" name="sill" id="sill" value="нет" checked>
          <label class="form-check-label" for="sill">
            нет
          </label>
      </div>
    </div>

 </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">email заказчика</label>
      <input type="email" name = "email" class="form-control" id="email" placeholder="email">
    </div>
 
    <div class="form-group col-md-6">
      <label for="name">Имя заказчика</label>
      <input type="text" name = "name" class="form-control" id="name" placeholder="Ваше имя">
    </div>
 
  </div>
 
 
 <div class="form-row">
 	<div class="form-group col-md-12">
	    <button type="submit" name = "submit" class="btn btn-primary">Заказать окно</button>
    </div>
 
 </div>
  
</form>
 
</div>


 