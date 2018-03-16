<ul class="nav navbar-nav">
   <li <?php
	  	if($controller->getActionName()=='defaultAction')
			echo 'class="active"';
	   ?>
	 ><a href="index.php">Accueil</a></li>
   <li <?php
	  	if($controller->getActionName()=='monCompte')
			echo 'class="active"';
	   ?>><a href="index.php?c=user&amp;a=monCompte">Mon Compte</a></li>
</ul>

<form class="navbar-form navbar-right" id="login_form" action="index.php" method="post">
	<button type="submit" class="btn btn-primary">Se déconnecter</button>
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



