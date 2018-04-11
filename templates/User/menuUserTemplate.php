<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"> Travel Mines</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
		
		<form action="index.php" method="post">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?c=user&a=index">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?c=user&a=monCompte">Mon Compte</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?c=trajet&a=mesTrajets">Mes Trajets</a>
            </li>
		  </ul>
		  <ul class="navbar-nav text-uppercase ml-auto">
			<li class="nav-item">
				<button id="sendMessageButton" class="btn btn-primary" type="submit" href="index.php?c=user&a=seDeconnecter">Se Deconnecter</button>
            </li>
          </ul>
        </div>
		</form>
      </div>
</nav>
