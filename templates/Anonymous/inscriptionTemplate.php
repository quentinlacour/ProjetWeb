<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Rejoignez nous !</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="index.php?a=validateInscription" method="post" id="inscriptionForm" >
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="inputLogin" name="inscLogin" placeholder="Login" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputPassword" name="inscPassword" type="password" placeholder="Mot de passe" required data-validation-required-message="Please enter your password.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputTelephone" name="inputTelephone" placeholder="Telephone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" id="inputFirstname" name="inputFirstname" placeholder="Prenom" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                   <div class="form-group">
                    <input class="form-control"id="inputLastname" name="inputLastname" placeholder="Nom" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required data-validation-required-message="Please enter your email address." type="email">
                    <p class="help-block text-danger"></p>
                  </div>
                  
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input type="submit" value="Créer mon compte" name="boutonCreerCompte" class="btn btn-primary btn-xl text-uppercase"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>



  