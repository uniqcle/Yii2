<?php 

if( $model->hasErrors() ){
  debug( $model->getErrors() );
}

 ?>


<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Редактировать данные сотрудника</h2>
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
       <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
 </div>
</form>

</div>
</div>