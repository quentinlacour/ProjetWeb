<?php
	$login = $_SESSION["login"];
	$idUser = $_SESSION["id"];
	$reponse = Trajet::recupererVoitures('3');
?>
 <link href="css/menuAgency.css" rel="stylesheet">
  <link href="css/agency.css" rel="stylesheet">
	  


<section class="content-section" id="portfolio">
 
 <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Créer un trajet</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="index.php?c=trajet&a=creationTrajet" method="post" id="creerTrajetForm" >
              <div class="row">
			  
			<div class="col-md-6">
				  <div class="form-group">
                    <input class="form-control" id="nomTrajet" name="nomTrajet" type="text" placeholder="Nom du Trajet" required data-validation-required-message="Selectionner un nom de trajet">
                    <p class="help-block text-danger"></p>
                  </div>
                  
                  <div class="form-group">
                    <input class="form-control" id="lieuDepart" name="lieuDepart" type="text" placeholder="Lieu Départ" required data-validation-required-message="Selectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="lieuArrivee" name="lieuArrivee" type="text" placeholder="Lieu d'arrivée" required data-validation-required-message="Selectionner un lieu de départ">
                    <p class="help-block text-danger"></p>
                  </div>
				  <div class="form-group">
                    <input class="form-control" id="nombrePlaces" name="nombrePlaces" type="text" placeholder="Nombre de Places" required data-validation-required-message="Selectionner un nombre de places disponibles">
                    <p class="help-block text-danger"></p>
                </div>
			</div>
			
            <div class="col-md-6">
				<div class="form-group">
                    <input class="form-control" id="date" name="date" type="date" placeholder="Date" required data-validation-required-message="Selectionner une date">
                    <p class="help-block text-danger"></p>
                </div>
				<div class="form-group">
                    <input class="form-control" id="heure_depart" name="heure_depart" type="text" placeholder="Heure de départ au format hh:mm" required data-validation-required-message="Selectionner une heure de départ">
                    <p class="help-block text-danger"></p>
                </div>
				<div class="form-group">
                    <input class="form-control" id="heure_arrivee" name="heure_arrivee" type="text" placeholder="Heure d'arrivée au format hh:mm" required data-validation-required-message="Selectionner une heure d'arrivée">
                    <p class="help-block text-danger"></p>
                </div>              
				<div class="form-group">
					<select name="voiture">
						<?php for($i=0; $i < sizeof($reponse); $i++){ ?>
							<option value="<?php echo $reponse[$i][0]?>";>
							<?php echo $reponse[$i][0]; ?> </option>
						<?php
							} 
						?>
					</select>
                    <p class="help-block text-danger"></p>
                </div>
			</div>
			
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
				
                  <div id="success"></div>
                  <input type="submit" value="Créer un trajet" name="creationTrajet" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</section>
	