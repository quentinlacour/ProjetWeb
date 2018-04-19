<!DOCTYPE html>
<html lang="en">

<script language="JavaScript" type="text/javascript">
	function login(showhide){
		if(showhide == "show"){
			document.getElementById('popupbox').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('popupbox').style.visibility="hidden"; 
		}
	}
	javascript:login('hide');
</script>













<style type="text/css">
.popupStat{
  position: absolute;
  left: 30px;
  top: -30px;
  z-index: 999;
  width: 300px;
  background: #fff;
  color: #333;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 25px;
  -moz-box-shadow: 0 0 5px #999;
  -webkit-box-shadow: 0 0 5px #999;
  box-shadow: 0 0 5px #999;
}
</style>
	<div class="popupStat" id="trajetJour" name="boutonTrajetParJour"> 
		<center> Nombre trajets  Jour du mois </center>
		<?php 
		$nbTrajets = sizeof($nbTrajetParJour);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParJour[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParJour[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:nbTrajetParJour('hide');">Close</a></center> 
	</div>














<style type="text/css">
#popupbox{
	    margin: -70px;
    margin-left: 40%;
    padding-top: 11px;
    rgin-top: 50px;
    padding-top: 16px;
    width: 15%;
    height: 255px;
    position: sticky;
    top: 150px;
    left: 43%;
    background: #fed136;
    z-index: 9;
    font-family: arial;
    opacity: 0.85;
    visibility: hidden;
    color: red;
    border: solid #000000 1px;
}
</style>
<div id="popupbox"> 
	<form name="login" action="index.php?a=validateConnection" method="post">
		<center>Login</center>
		<center><input name="login" size="14" /></center>
		<br />
		<center>Mot de Passe</center>
		<center><input name="password" type="password" size="14" /></center>
    <br />
		<center><input type="submit" name="submit" value="Login" /></center>
    <br />
	</form>
	<center><a href="javascript:login('hide');">Close</a></center> 

</div> 

    <!-- Intro Header -->
    <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Bienvenue sur Travel Mines !</div>
        <div class="intro-heading text-uppercase">Pas envie de marcher ?</div>
		<?php 
			if(isset($_GET['c'])){
				$link1 = "index.php?c=trajet&a=rechercherTrajet";
				$link2 = "index.php?c=trajet&a=creerTrajet";
			} 
			else{
				$link1 = "javascript:login('show');";
				$link2 = "javascript:login('show');";
			}
		?> 
		<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $link1;?>">Trouver une Voiture</a>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $link2;?>">Proposer un trajet</a>
      </div>
    </div>
  </header>

	

  

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>
  	<link rel="stylesheet" href="css/style.css">
  </body>

</html>
