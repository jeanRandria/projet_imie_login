<!-- register-->
	<div class="login-wrapper">

  <!--  echo validation_errors(); pour afficher tous les erreurs en même temps  -->
    	<?php echo form_open('registerUser', 'role="form"  id="monform"'); ?>
    <!-- <form action="#" role="form" method="post"> -->
			<div class="popup-header">
				<a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">Enregistrement</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<li><a href="login"><i class="icon-info"></i>Se connecter</a></li>
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
				
				<div class="form-group has-feedback">
				<?php echo form_error('passwordAgain'); ?>
					<label>Mot de passe</label>
					<input type="password" name="passwordAgain" autocomplete="off" class="form-control" placeholder="Répeter mot de passe">
					<i class="icon-lock form-control-feedback"></i>
				</div>
				<div class="form-group has-feedback">
					<input id="phpVar" type="hidden" name="token" value="<?php echo  $valPasseAuView; ?>">
				</div>


				<div class="row form-actions">
					<div class="col-xs-6">
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Enregistrer</button>
					</div>
				</div>
			</div>
    	</form>
    	<li><a id="btnErreurAjout" onclick="$.jGrowl('A message with a header', { header: 'Important' });">Notification with header</a></li>
    	<li><a onclick="$.jGrowl('Something went wrong here', { sticky: true, theme: 'growl-error', header: 'Error!' });">Error notification</a></li>
	</div>  
	<p><?php echo $valPasseAuView ?></p>


 