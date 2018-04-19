<?php
	$mesTrajets = $this->getArg('mesTrajets');
	// print_r($mesTrajets[0]);
?>  

<section class="content-section" id="portfolio">
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Historique de mes trajets</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-12">
				<div class="container">
				<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item"> 
								<p class="text" name="nom_trajet" id="nom_trajet">Nom du trajet</p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="nom_trajet" id="nom_trajet">Ville de départ</p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="nom_trajet" id="nom_trajet">Ville d'arrivée</p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="nom_trajet" id="nom_trajet">Heure du départ</p>
							</li>
						</ul>
				<?php 
					$nbTrajets = sizeof($mesTrajets);
					for ($i=0; $i<$nbTrajets; $i++){ ?>
						<ul class="list-inline mb-2" style="text-align: center;">
							<li class="list-inline-item"> 
								<p class="text" name="nom_trajet" id="nom_trajet"><?php print_r($mesTrajets[$i]['nom_trajet']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="lieu_depart"><?php print_r($mesTrajets[$i]['lieu_depart']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="lieu_arrivee"><?php print_r($mesTrajets[$i]['lieu_arrivee']);?></p>
							</li>
							<li class="list-inline-item"> 
								<p class="text" name="heure_depart"><?php print_r($mesTrajets[$i]['heure_depart']);?></p>
							</li>
						</ul>
						<?php 
					}?>
				</div>
			</div>
			</div>
		</div>
	</section>
</section>