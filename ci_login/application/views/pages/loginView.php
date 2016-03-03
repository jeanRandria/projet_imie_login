<!-- Login wrapper -->
	<div class="login-wrapper">

  <!--  echo validation_errors(); pour afficher tous les erreurs en même temps  -->
    	<?php echo form_open('verifyLogin', 'role="form"  id="monform"'); ?>
    <!-- <form action="#" role="form" method="post"> -->
			<div class="popup-header">
				<a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">Identification</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<li><a href="forget"><i class="icon-info"></i> Vous avez oublié?</a></li>
						<li><a href="register"><i class="icon-support"></i>S'enregistrer</a></li>
                    </ul>
				</div>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
				<?php echo form_error('name'); ?>
					<label>Identifiant</label>
					<input type="text" name="name" autocomplete="off" class="form-control" placeholder="Votre pseudo">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
				<?php echo form_error('password'); ?>
					<label>Mot de passe</label>
					<input type="password" name="password" autocomplete="off" class="form-control" placeholder="Votre mot de passe">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Connexion</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->

 