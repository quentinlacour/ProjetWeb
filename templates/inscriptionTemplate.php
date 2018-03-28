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


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
		  
