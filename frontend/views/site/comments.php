<?php 

if( $model -> hasErrors() ){
	debug ($model -> getErrors() );
}
?>


<div class="container">
	<div class="row">
		<?php foreach($commentList as $commentItem): ?>
		<h4><?=$commentItem['name'] ?></h4>
	       </br>
		<p><?=$commentItem['text'] ?></p>
		</br>
		<hr>
		<?php endforeach;  ?>
	</div>
	
	<div class="row">
		<form method = "post">
			  <div class="form-row">
			    <div class="form-group col-md-12">
			      <label for="width">Имя</label>
			      <input type="text" name = "name" class="form-control" id="name" placeholder="Имя">
			    </div>

			    <div class="form-group col-md-12">
			      <label for="email">email</label>
			      <input type="text" name = "email" class="form-control" id="email" placeholder="email">
			    </div>
			  </div>

			  <div class="form-row">
			  	<textarea name="text" id="" cols="30" rows="10">
			  		
			  	</textarea>
			  </div>

			  <div class="form-row">
			  	<button type = "submit">Комментировать</button>
			  </div>
		</form>
	</div>
</div>

