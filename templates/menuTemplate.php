<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Travel Mines</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
		<form action="index.php?a=validateConnection" method="post">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?c=anonymous&amp;a=inscription">Inscription</a>
            </li>
		  </ul>
		  <ul class="navbar-nav text-uppercase ml-auto">
			<li class="nav-item">
				<input id="login" name="login" type="text" placeholder="Login" required data-validation-required-message="Please enter your name.">
            </li>
			<li class="nav-item">
				<input id="password" name="password" type="password" placeholder="Mot de Passe" required data-validation-required-message="Please enter your name.">
            </li>
			<li class="nav-item">
				<button id="sendMessageButton" class="btn btn-primary" type="submit">Connexion</button>
            </li>
          </ul>
        </div>
		</form>
      </div>
</nav>
