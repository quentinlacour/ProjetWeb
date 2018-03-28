<?php



  	if(!isset($inputPasswordError))  
  		$inputPasswordError = false;
  	if(!isset($inputPasswordFeedbackMsg))  
  		$inputPasswordFeedbackMsg = "Error";

  	if(!isset($inputPasswordError2))  
  		$inputPasswordError2 = false;
  	if(!isset($inputPasswordFeedbackMsg2))  
  		$inputPasswordFeedbackMsg2 = "Error";

  	if(!isset($inputLastnameError))  
  		$inputLastnameError = false;
  	if(!isset($inputLastnameErrorFeedbackMsg))  
  		$inputLastnameErrorFeedbackMsg = "Error";

  	// if(!isset(Error))
  	// 	 = false;
  	// if(!isset(FeedbackMsg))
  	// 	FeedbackMsg = "Error";
?>
<div class="container auth">
    <h1 class="text-center">Bootstrap form theme <span>It's nice!</span> </h1>
    <div id="big-form" class="well auth-box">
      <form>
        <fieldset>

          <!-- Form Name -->
          <legend>Nice form example</legend>

          <div class="btn-group">
            <a href="index.html" class="btn btn-default">All</a>
            <a href="example1.html" class="btn btn-default">example 1</a>
            <a href="example2.html" class="btn btn-default">example 2</a>
          </div>


          <!-- Text input-->
          <div class="form-group">
            <label class=" control-label" for="textinput">Username</label>  
            <div class="">
              <input id="textinput" name="textinput" placeholder="Username" class="form-control input-md" type="text">
              <span class="help-block">help</span>  
            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class=" control-label" for="passwordinput">Password</label>
            <div class="">
              <input id="passwordinput" name="passwordinput" placeholder="Password" class="form-control input-md" type="password">
              <span class="help-block">help</span>
            </div>
          </div>

        </fieldset>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
  
  
  
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Créer un compte</h2>
            <h3 class="section-subheading text-muted">Inscris toi vite pour voyager avec nous!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate action="index.php?a=validateInscription" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="inputLogin" name="inscLogin" type="text" placeholder="Login" required data-validation-required-message="Entrez votre identifiant">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputPassword" name="inscPassword" type="password" placeholder="Mot de passe" required data-validation-required-message="Choisir un mot de passe">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputConfirmPassword" name="inscPassword2" type="password" placeholder="Confirmez Mot de passe" required data-validation-required-message="Confirmez votre mot de passe">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputLastname" name="inputLastname" type="text" placeholder="Nom" required data-validation-required-message="Entrez votre nom">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputFirstname" name="inputFirstname" type="text" placeholder="Prenom" required data-validation-required-message="Entrez votre prénom">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputTelephone" name="inputTelephone" type="tel" placeholder="Téléphone" required data-validation-required-message="Entrez votre numéro de téléphone">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="inputEmail" name="inputEmail" type="email" placeholder="Email" required data-validation-required-message="Entrez votre email">
                    <p class="help-block text-danger"></p>
                  </div>
					<label class="checkbox-inline">
						<input type="checkbox" checked value="agree" id="inputAcceptConditions" name='inputAcceptConditions'><a href="#"> J'accepte les conditions</a>.
					</label>				  
                </div>
                <div class="clearfix"></div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-3">
					<input type="submit" class="btn btn-primary" value="Créer mon compte" name="boutonCreerCompte">
					<input type="reset" class="btn btn-default" value="Annuler">
				</div>
				</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
        <div class="form-group requiredField <?php if(isset($inputAcceptConditionsError) && $inputAcceptConditionsError) echo 'has-error'; if(isset($inputAcceptConditionsFeedbackMsg)) echo ' has-feedback' ?>">
				<div class="col-sm-offset-3 col-sm-3">
                <label class="checkbox-inline">
                    <input type="checkbox" checked value="agree" id="inputAcceptConditions" name='inputAcceptConditions'>J'accepte <a href="#">les conditions</a>.
                </label>
            </div>
   			 <?php if(isset($inputAcceptConditionsFeedbackMsg)): ?>
   	       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
   			 		<span class="feedback-error"><?php echo $inputAcceptConditionsFeedbackMsg; ?></span>
   				 </div>
   			 <?php endif ?>
        </div>
		  
