
<ul class="nav navbar-nav">
   <li <?php
	  	if($controller->getActionName()=='defaultAction')
			echo 'class="active"';
	   ?>
	 ><a href="index.php">Accueil</a></li>
   <li <?php
	  	if($controller->getActionName()=='inscription')
			echo 'class="active"';
	   ?>><a href="index.php?c=anonymous&amp;a=inscription">Inscription</a></li>
</ul>

<form class="navbar-form navbar-right" id="login_form" action="index.php" method="post">
	<div class="form-group">
		<label class="sr-only" for="inputEmail">Identifiant</label>
		<input class="form-control" id="inputEmail" name="login" placeholder="Identifiant">
	</div>
	<div class="form-group">
		<label class="sr-only" for="inputPassword">Mot de passe</label>
		<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Mot de passe">
	</div>
	<button type="submit" class="btn btn-primary">Connexion</button>
	<?php 
		if(isset($errorText)) 
			echo "<p id='errorLogin'>$errorText</p>
				<script type='text/javascript' language='javascript'>
				jQuery(function ($){
					$('#errorLogin').fadeOut(5000);
				});	
				</script>";
	?>
</form>



