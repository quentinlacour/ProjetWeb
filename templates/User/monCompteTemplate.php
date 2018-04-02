<?php
	$login = $_SESSION["login"];
	$nom = $_SESSION["nom"];
	$prenom = $_SESSION["prenom"];
	$email = $_SESSION["email"];
	$password = $_SESSION["password"];
	$telephone = $_SESSION["telephone"];
?>

<section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Mon compte</h2>
            <h3 class="section-subheading text-muted">Un utilisateur, pas comme les autres</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="BootStrap/img/team/1.jpg" alt="">
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
                  <div class="timeline-heading">
                    <h4>Informations Modifiables</h4>
					 <div class="timeline-body">
						<h5 class="subheading">Email</h5>
						<p class="text-muted"> 
							<input class="form-control" id="email" name="emailChg" type="text" placeholder=<?php echo $email;?>>
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
						<h5 class="subheading">Nombre de trajets effectués</h5>
						<p class="text-muted"> <?php echo $login;?> </p> 
						<h5 class="subheading">Nombre de trajets crées</h5>
						<p class="text-muted"> <?php echo $nom;?> </p>
						<h5 class="subheading">Heures passées en voiture</h5>
						<p class="text-muted"> <?php echo $prenom;?> </p>
					</div>
                  </div>
                </div>
              </li>
			  
			  
			  </ul>
			  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="index.php?c=user&a=enregistrerInfos">Enregistrer les changements</a>
            </div>
          </div>
        </div>
		
		
		 
        <div class="row">
          <div class="col-lg-15 mx-auto text-center">
            <p class="large text-muted">N'hésitez pas à mettre régulierement à jour votre compte !</p>
          </div>
        </div>
   </section>
