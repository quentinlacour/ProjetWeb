<?php
	$login = $_SESSION["login"];
	$nom = $_SESSION["nom"];
	$prenom = $_SESSION["prenom"];
	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	$telephone = $_SESSION["telephone"];
	$reponse = Trajet::recupererVoitures($_SESSION["id"]);
?>
 <link href="css/menuAgency.css" rel="stylesheet">
<link href="css/agency.css" rel="stylesheet">
	  
<section  id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Mon compte</h2>
            <h3 class="subheading">Un utilisateur, pas comme les autres</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="BootStrap/Agency/img/team/1.jpg" alt="">
              <h4><?php echo $_SESSION["login"]; ?></h4>
              <p class="text-muted">Etudiant</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
					<a href="https://www.facebook.com/<?php echo $prenom.'.'.$nom ; ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
              </ul>
			  <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Informations Personnelles</h4>
					 <div class="timeline-body">
						<h5 class="subheading">Pseudo</h5>
						<p class="text-muted"> <?php echo $login;?> </p> 
						<h5 class="subheading">Nom</h5>
						<p class="text-muted"> <?php echo $nom;?> </p>
						<h5 class="subheading">Prenom</h5>
						<p class="text-muted"> <?php echo $prenom;?> </p>
					</div>
                  </div>
                </div>
              </li>
			  <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading" >
                    <h4>Informations Modifiables</h4>
					 <div class="timeline-body">
					   <form action="index.php?c=user&a=enregistrerInfos" method="post">
				
							<h5 class="subheading">Email</h5>
							<p class="text-muted"> 
								<input class="form-control" id="email" name="emailChg" type="email" placeholder=<?php echo $email;?>>
							</p> 
							<h5 class="subheading">Telephone</h5>
							<p class="text-muted"> 
								<input class="form-control" id="telephone" name="telephoneChg" type="text" placeholder=<?php echo $telephone;?>>
							</p> 
							<h5 class="subheading">Mot de Passe</h5>
							<p class="text-muted"> 
								<input class="form-control" id="password" name="passwordChg" type="password" placeholder="Votre nouveau mot de passe">
								<input class="form-control" id="password" name="password2Chg" type="password" placeholder="Confirmez votre nouveau mot de passe">
							</p> 
							<input type="submit" value="Enregistrer" name="boutonEnregistrerInfo" class="btn btn-default" ></input>
						</form>
					</div>
                  </div>
                </div>
              </li>
			  <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Statistiques</h4>
					 <div class="timeline-body">
           <h5 class="subheading">Mes voitures</h5>
           <p class="text-muted">
             <select name="voiture">
               <?php for($i=0; $i < sizeof($reponse); $i++){ ?>
                 <option value="<?php echo $reponse[$i][0]?>";>
                 <?php echo $reponse[$i][0] . ' - ' . $reponse[$i][1] ;?> </option>
               <?php
                 } 
               ?>
             </select>
           </p>
           
           <h5 class="subheading">Créer une voiture</h5>
           <p class="text-muted"> 
           <form action="index.php?c=user&a=creerVoiture" method="post">
           <p class="text-muted">
             <input class="form-control" id="modele" name="modele" type="text" placeholder="Ton modèle de voiture">
             <input class="form-control" id="couleur" name="couleur" type="text" placeholder="La couleur de ta voiture">
             <input class="form-control" id="nombre_places" name="nombre_places" type="number" placeholder="Le nombre de places disponibles">
           </p>
           <input type="submit" value="Enregistrer ma voiture" name="boutonCreerVoiture" class="btn btn-default" ></input>
           </p>
					</div>
                  </div>
                </div>
              </li>
			  
			  
			  </ul>
			
            </div>
          </div>
        </div>
		
		
		 
        <div class="row">
          <div class="col-lg-15 mx-auto text-center">
            <p class="subheading" >N'hésitez pas à mettre régulierement à jour votre compte !</p>
          </div>
        </div>
   </section>
