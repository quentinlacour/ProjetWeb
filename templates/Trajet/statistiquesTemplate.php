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
	
	
	// print_r($nombreMoyenPersonneParTrajet[0]);
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
	function nbTrajetParAnnee(showhide){
		if(showhide == "show"){
			document.getElementById('trajetAn').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('trajetAn').style.visibility="hidden"; 
		}
	}
	function top10PersonnesCreatrices(showhide){
		if(showhide == "show"){
			document.getElementById('top10PersonnesCreatrices').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('top10PersonnesCreatrices').style.visibility="hidden"; 
		}
	}
	function top10PersonnesParticipatrices(showhide){
		if(showhide == "show"){
			document.getElementById('top10PersonnesParticipatrices').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('top10PersonnesParticipatrices').style.visibility="hidden"; 
		}
	}
	function top10VilleDepart(showhide){
		if(showhide == "show"){
			document.getElementById('top10VilleDepart').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('top10VilleDepart').style.visibility="hidden"; 
		}
	}
	function top10VilleDestination(showhide){
		if(showhide == "show"){
			document.getElementById('top10VilleDestination').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('top10VilleDestination').style.visibility="hidden"; 
		}
	}
	function nombreMoyenPersonneParTrajet(showhide){
		if(showhide == "show"){
			document.getElementById('nombreMoyenPersonneParTrajet').style.visibility="visible";
		}else if(showhide == "hide"){
			document.getElementById('nombreMoyenPersonneParTrajet').style.visibility="hidden"; 
		}
	}
</script>

<style type="text/css">
.popupStat{

  position: absolute;
  margin: auto;
  margin-top: -200px;
  z-index: 999;
  width: 300px;
  background: #fed136;
  color: #333;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 25px;
  -moz-box-shadow: 0 0 5px #999;
  -webkit-box-shadow: 0 0 5px #999;
  box-shadow: 0 0 5px #999;
  opacity: 0.85;
  display: block;
  visibility: hidden;

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
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nbTrajetParAnnee('show');">Nombre de Trajets par an</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:top10PersonnesCreatrices('show');">Top 10 des personnes créant des trajets</a>
		  </div>
		  <div class="col-md-6">
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:top10VilleDepart('show');">Top 10 des villes de départ</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:top10VilleDestination('show');">Top 10 des villes de destination</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:nombreMoyenPersonneParTrajet('show');">Nombre moyen de personnes par trajets</a>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="javascript:top10PersonnesParticipatrices('show');">Top 10 des personnes participant à des trajets</a>
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
		<center> Nombre trajets  Mois </center>
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
	<div class="popupStat" id="trajetAn" name="boutonTrajetParAn"> 
		<center> Nombre trajets  Annee </center>
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
		<center><a href="javascript:nbTrajetParAnnee('hide');">Close</a></center> 
	</div>
							<!-- top10PersonnesCreatrices --> 
	<div class="popupStat" id="top10PersonnesCreatrices" name="boutonTrajetParJour"> 
		<center> Nombre Trajets - Prenom - Nom </center>
		<?php 
		$nbTrajets = sizeof($top10PersonnesCreatrices);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10PersonnesCreatrices[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10PersonnesCreatrices[$i][1]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10PersonnesCreatrices[$i][2]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:top10PersonnesCreatrices('hide');">Close</a></center> 
	</div>

							<!-- top10PersonnesParticipatrices --> 
	<div class="popupStat" id="top10PersonnesParticipatrices" name="boutonTrajetParJour"> 
		<center> Prenom - Nom - Nombre de Trajets </center>
		<?php 
		$nbTrajets = sizeof($top10PersonnesParticipatrices);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10PersonnesParticipatrices[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10PersonnesParticipatrices[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:top10PersonnesParticipatrices('hide');">Close</a></center> 
	</div>	

							<!-- Ville De Départ --> 
	<div class="popupStat" id="top10VilleDepart" name="boutonTrajetParJour"> 
		<center> Nombre Départs - Ville </center>
		<?php 
		$nbTrajets = sizeof($top10VilleDepart);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10VilleDepart[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10VilleDepart[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:top10VilleDepart('hide');">Close</a></center> 
	</div>	
	
							<!-- Ville De Arrivee --> 
	<div class="popupStat" id="top10VilleDestination" name="boutonTrajetParJour"> 
		<center> Nombre Arrivée - Ville </center>
		<?php 
		$nbTrajets = sizeof($top10VilleDestination);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10VilleDestination[$i][0]);?></p>
				</li>
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($top10VilleDestination[$i][1]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:top10VilleDestination('hide');">Close</a></center> 
	</div>	
	
							<!-- Ville D'Arrivee --> 
	<div class="popupStat" id="nombreMoyenPersonneParTrajet" name="boutonTrajetParJour"> 
		<center> Nombre moyens de personnes par trajet </center>
		<?php 
		$nbTrajets = sizeof($nombreMoyenPersonneParTrajet);
		for ($i=0; $i<$nbTrajets; $i++){ ?>
			<ul class="list-inline mb-2" style="text-align: center;">
				<li class="list-inline-item"> 
					<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($nombreMoyenPersonneParTrajet[$i][0]);?></p>
				</li>
			</ul> 
		<?php 
		}?>
		</ul> 
		<br />
		<center><a href="javascript:nombreMoyenPersonneParTrajet('hide');">Close</a></center> 
	</div>
	
	  

	  
    </section>
</section>











