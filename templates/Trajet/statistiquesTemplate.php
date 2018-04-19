<<<<<<< HEAD
Statistiques
<link href="css/menuAgency.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
	  
=======
<?php 
	// $distanceParJour = Trajet::distanceParJour();
	// $distanceParMois = Trajet::distanceParMois();
	// $distanceParAnnee = Trajet::distanceParAnnee();
	$nbTrajetParJour = Trajet::nbTrajetParJour();
	$nbTrajetParMois = Trajet::nbTrajetParMois();
	$nbTrajetParAnnee = Trajet::nbTrajetParAnnee();
	$top10PersonnesCreatrices = Trajet::top10PersonnesCreatrices();
	$top10PersonnesParticipatrices = Trajet::top10PersonnesParticipatrices();
	$top10VilleDepart = Trajet::top10VilleDepart();
	$top10VilleDestination = Trajet::top10VilleDestination();
	$nombreMoyenPersonneParTrajet = Trajet::nombreMoyenPersonneParTrajet();
	$nombreMoyenEtapeParTrajet = Trajet::nombreMoyenEtapeParTrajet();
	
	
	// print_r($nbTrajetParJour[0]);
?>

<script language="JavaScript" type="text/javascript">
	function nbTrajetParJour(showhide){
		if(showhide == "show"){
			document.getElementById('trajetJour').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('trajetJour').style.visibility="hidden"; 
		}
	}
	function nbTrajetParMois(showhide){
		if(showhide == "show"){
			document.getElementById('trajetMois').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('trajetMois').style.visibility="hidden"; 
		}
	}
</script>

<style type="text/css">
.popupStat{
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


<section class="content-section" id="portfolio">	  
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Historique de mes trajets</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Nombre de Trajets par jour</a>
			<br />
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParMois('show');">Nombre de Trajets par mois</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Nombre de Trajets par an</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Top 10 des personnes créant des trajets</a>
		  </div>
		  <div class="col-md-6">
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Top 10 des villes de départ</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Top 10 des villes de destination</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Nombre moyen de personnes par trajets</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParJour('show');">Top 10 des personnes participant à des trajets</a>
          </div>
        </div>
      </div>
	  
	  
																	<!-- POPUPS --> 
									<!-- Trajets par jour --> 
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
							<!-- Trajets par mois --> 
	<div class="popupStat" id="trajetMois" name="boutonTrajetParMois"> 
		<center> Nombre trajets  Jour du mois </center>
		<?php 
		$nbTrajets = sizeof($nbTrajetParMois);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParMois[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParMois[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:nbTrajetParMois('hide');">Close</a></center> 
	</div>
							<!-- Trajets par an --> 
	<div class="popupStat" id="trajetJour" name="boutonTrajetParAn"> 
		<center> Nombre trajets  Jour du mois </center>
		<?php 
		$nbTrajets = sizeof($nbTrajetParAnnee);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParAnnee[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nbTrajetParAnnee[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:nbTrajetParAn('hide');">Close</a></center> 
	</div>
	
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
	
	
	
	  

	  
    </section>
</section>











>>>>>>> 4ebe837e4a8ce29c5535222f82a2250ad0ac7f41
