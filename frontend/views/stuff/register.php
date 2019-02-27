<?php 
//Вывод ошибок
if(  $model-> hasErrors() ){
     $errors = $model -> getErrors(); 

     foreach( $errors as $error ){
        foreach($error as $item){
          echo '- '.$item.'<br>'; 
        }
     }
}

//Вывод Flash сообщения при успешной регистрации
if( Yii::$app -> session->hasFlash('registerStatus') ){
  echo Yii::$app -> session -> getFlash('registerStatus');
}

 ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Регистрация нового сотрудника</h2>
        <p>Добро пожаловать в компанию!</p>
    </div>
  </div>

<div class="row">
<form method = "post">
 
  <div class = "row">
    <div class="form-group col-md-6 col-md-offset-3">
      <label for="firstName">Имя</label>
      <input class="form-control" name = "firstName" id = "firstName" type="text" placeholder="Иван">
    </div>
 </div>

 <div class = "row">
    <div class="form-group col-md-6 col-md-offset-3">
      <label for="lastName">Фамилия</label>
      <input class="form-control" name = "lastName" id = "lastName" type="text" placeholder="Иванов">
    </div>
 </div>

  <div class = "row">
    <div class="form-group col-md-6 col-md-offset-3">
      <label for="middleName">Отчество</label>
      <input class="form-control" name = "middleName" id = "middleName" type="text" placeholder="Иванович">
    </div>
 </div>

   <div class = "row">
    <div class="form-group col-md-6 col-md-offset-3">
      <label for="email">эл. почта</label>
      <input class="form-control" name = "email" id = "email" type="text" placeholder="ivanov@yandex.ru">
    </div>
 </div>
   
  <div class = "row">
    <div class="form-group col-md-6 col-md-offset-3">
       <button type="submit" class="btn btn-primary">Регистрация</button>
    </div>
 </div>
</form>

</div>
</div>