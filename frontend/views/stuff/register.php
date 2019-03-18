<?php 

use yii\helpers\Html; 
use yii\widgets\ActiveForm; 


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

<?php $form = ActiveForm::begin();  ?>

<!-- echo $form->field($model, $attribute); --> 

<?php echo $form->field($model, 'firstName'); ?>
<?php echo $form->field($model, 'lastName'); ?>
<?php echo $form->field($model, 'middleName'); ?>
<?php echo $form->field($model, 'bday'); ?>
<?php echo $form->field($model, 'wday'); ?>
<?php echo $form->field($model, 'city')->dropDownList( $model->getCitiesList() ); ?>
<?php echo $form->field($model, 'position') ?>
<?php echo $form->field($model, 'number_id'); ?>
<?php echo $form->field($model, 'email'); ?>

<?php echo Html::submitButton('Зарегестрировать', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>

 

<!--  <form method = "post">

     <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    
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
           <label for="bday">Дата рождения</label>
           <input class="form-control" name = "bday" id = "bday" type="date" placeholder="Дата рождения">
        </div>
      </div>

       <div class = "row">
         <div class="form-group col-md-6 col-md-offset-3">
           <label for="wday">Дата начала работы </label>
           <input class="form-control" name = "wday" id = "wday" type="date" placeholder="Дата начала работы ">
         </div>
       </div>

      <div class = "row">
        <div class="form-group col-md-6 col-md-offset-3">
           <label for="city">Город</label>
           <select name = "city" class="form-control" id="city">
             <option  selected ></option>
             <option value = "2">Novosibirsk</option>
             <option value = "3">Omsk</option>
           </select>
         </div>
      </div>

       <div class = "row">
         <div class="form-group col-md-6 col-md-offset-3">
           <label for="position">Должность</label>
           <input class="form-control" name = "position" id = "position" type="text" placeholder="Должность">
         </div>
       </div>

        <div class = "row">
           <div class="form-group col-md-6 col-md-offset-3">
             <label for="number_id">Идентификационный номер</label>
             <input class="form-control" name = "number_id" id = "number_id" type="text" placeholder="Идентификационный номер">
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
</form> -->

</div>
</div>