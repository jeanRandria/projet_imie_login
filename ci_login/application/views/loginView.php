<div class="container">
  <div class="jumbotron">

  <!--  echo validation_errors(); pour afficher tous les erreurs en même temps


  <?php echo form_open('verifyLogin', 'role="form"  id="monform"');?>
	<!-- <form role="form" action=""> -->
	<?php echo form_error('name'); ?>
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input class="form-control" id="name" name="name">
	  </div>
	  <?php echo form_error('password'); ?>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input  class="form-control" id="password" name="password">
	  </div>
	  <button type="submit" class="btn btn-default">Valider</button>
	   <?php echo MD5('supersecret'); ?>
	</form>
  </div>
</div>