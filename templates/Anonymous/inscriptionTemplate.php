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
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
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




<div class="container auth">
    <div id="big-form" class="well auth-box">
      <form action="index.php?a=validateInscription" method="post">
        <fieldset>
          <!-- Text input-->
          <div class="form-group">
            <div class="form-group">
              <input id="inputLogin" name="inscLogin" placeholder="Login" class="form-control input-md" type="text">
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <div class="">
              <input id="inputPassword" name="inscPassword" placeholder="Mot de passe" class="form-control input-md" type="password">
            </div>
          </div>

          <div class="form-group">
            <div class="">
              <input id="inputConfirmPassword" name="inscPassword2" placeholder="Confirmer mot de passe" class="form-control input-md" type="password">
            </div>
          </div>
          <!-- Name input-->
          <div class="form-group">
            <div class="form-group">
              <input id="inputLastname" name="inputLastname" placeholder="Nom" class="form-control input-md" type="text">
            </div>
          </div>

          <div class="form-group">
            <div class="form-group">
              <input id="inputFirstname" name="inputFirstname" placeholder="Prenom" class="form-control input-md" type="text">
            </div>
          </div>

           <!-- Phone input-->
           <div class="form-group">
            <div class="form-group">
              <input id="inputTelephone" name="inputTelephone" placeholder="Telephone" class="form-control input-md" type="text">
            </div>
          </div>

          <!-- Mail input-->
          <div class="form-group">
            <div class="form-group">
              <input id="inputEmail" name="inputEmail" placeholder="Email" class="form-control input-md" type="email">
            </div>
          </div>
          

          <!-- Création compte-->
          <div class="btn-group" >
            <input type="submit" value="Créer mon compte" name="boutonCreerCompte" class="btn btn-default" ></input>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
  
  