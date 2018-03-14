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




<h2>Inscription</h2>

<div class="row">


    <form class="form-horizontal col-sm-12" action="index.php?a=validateInscription" method="post">
		  <!-- ---------------- 
		  		 inputLogin 
  		  ---------------- -->	
        <div class="form-group requiredField <?php if(isset($inputLoginFeedbackMsg)) echo 'has-feedback'; if(isset($inputLoginError) && $inputLoginError) echo ' has-error';  ?>">
            <label class="control-label col-sm-3" for="inputLogin">Identifiant</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="inputLogin" placeholder="Login" aria-describedby="inputWarning2Status" autofocus="autofocus"  name="inscLogin">
					<?php	if(isset($inputLoginError) && $inputLoginError): ?>
						<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
					<?php endif ?>
            </div>
		       <div id="inputWarning2Status" class="col-sm-4 help-block feedback" aria-hidden="true">
					 <?php if(isset($inputLoginFeedbackMsg)): ?>
					 		<span class="feedback-error"><?php echo $inputLoginFeedbackMsg; ?></span>
					 <?php endif ?>
				</div>
				
			</div>

		  <!-- ---------------- 
		  		 inputPassword 
  		  ---------------- -->		  
        <div class="form-group requiredField <?php if(isset($inputPasswordFeedbackMsg)) echo 'has-feedback'; if(isset($inputPasswordError) && $inputPasswordError) echo ' has-error';  ?>">
            <label class="control-label col-sm-3" for="inputPassword">Mot de passe</label>
             <div class="col-sm-3">
					 <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" aria-describedby="inputPassordStatus" name="inscPassword">
 					<?php	if(isset($inputPasswordError) && $inputPasswordError): ?>
 						<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
 					<?php endif ?>
             </div>
				 <?php if(isset($inputPasswordFeedbackMsg)): ?>
	 	       	 <div id="inputPassordStatus" class="col-sm-4 help-block feedback" aria-hidden="true">
	 				 	 <span class="feedback-error"><?php echo $inputPasswordFeedbackMsg; ?></span>
	 				    <!-- <span class="feedback-success">Mot de passe fort</span> -->
	 				 </div>
				 <?php endif ?>
        </div>

		  <!-- ---------------- 
		  		 confirmPassword 
  		  ---------------- -->		  		  
        <div class="form-group requiredField <?php if(isset($inputPasswordError2) && $inputPasswordError2) echo 'has-error'; if(isset($inputPasswordFeedbackMsg2)) echo ' has-feedback' ?>">
            <label class="control-label col-sm-3" for="confirmPassword">Confirmer mot de passe</label>
             <div class="col-sm-3">
					 <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password" aria-describedby="inputSuccess3Status" name="inscPassword2">
					 <?php	if(isset($inputPasswordError2) && $inputPasswordError2): ?>
						 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
					 <?php endif ?>
             </div>
				 <?php if(isset($inputPasswordFeedbackMsg2)): ?>
		       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
				 		<span class="feedback-error"><?php echo $inputPasswordFeedbackMsg2; ?></span>
					 </div>
				 <?php endif ?>
        </div>

		  <!-- ---------------- 
		  		 name 
  		  ---------------- -->		  		  		  
        <div class="form-group requiredField <?php if(isset($inputLastnameError) && $inputLastnameError) echo 'has-error'; if(isset($inputLastnameFeedbackMsg)) echo ' has-feedback' ?>">
            <label class="control-label col-sm-3" for="inputLastname">Nom</label>
				<div class="col-sm-3">
                <input type="text" class="form-control" id="inputLastname" placeholder="Nom" name="inputLastname">
				 <?php	if(isset($inputLastnameError) && $inputLastnameError): ?>
					 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
				 <?php endif ?>
            </div>
			 <?php if(isset($inputLastnameFeedbackMsg)): ?>
	       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
			 		<span class="feedback-error"><?php echo $inputLastnameFeedbackMsg; ?></span>
				 </div>
			 <?php endif ?>
        </div>

		  <!-- ---------------- 
		  		 firstName 
  		  ---------------- -->		  		  		  
        <div class="form-group requiredField <?php if(isset($inputFirstnameError) && $inputFirstnameError) echo 'has-error'; if(isset($inputFirstnameFeedbackMsg)) echo ' has-feedback' ?>">
            <label class="control-label col-sm-3" for="inputFirstname">Prénom</label>
				<div class="col-sm-3">
                <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom" name="inputFirstname">
  				 <?php	if(isset($inputFirstnameError) && $inputFirstnameError): ?>
  					 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  				 <?php endif ?>
            </div>
  			 <?php if(isset($inputFirstnameFeedbackMsg)): ?>
  	       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
  			 		<span class="feedback-error"><?php echo $inputFirstnameFeedbackMsg; ?></span>
  				 </div>
  			 <?php endif ?>
        </div>
		
		<!-- ---------------- 
		  		 Telephone 
  		 ---------------- -->		  		  		  
        <div class="form-group requiredField <?php if(isset($inputTelephoneError) && $inputTelephoneError) echo 'has-error'; if(isset($inputTelephoneFeedbackMsg)) echo ' has-feedback' ?>">
            <label class="control-label col-sm-3" for="inputTelephone">Téléphone</label>
				<div class="col-sm-3">
                <input type="text" class="form-control" id="inputTelephone" placeholder="Téléphone" name="inputTelephone">
  				 <?php	if(isset($inputTelephoneError) && $inputTelephoneError): ?>
  					 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
  				 <?php endif ?>
            </div>
  			 <?php if(isset($inputTelephoneFeedbackMsg)): ?>
  	       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
  			 		<span class="feedback-error"><?php echo $inputTelephoneFeedbackMsg; ?></span>
  				 </div>
  			 <?php endif ?>
        </div>
		  		  
		 <!-- ---------------- 
		 		 inputEmail 
		 ---------------- -->
        <div class="form-group requiredField <?php if(isset($inputEmailError) && $inputEmailError) echo 'has-error'; if(isset($inputEmailFeedbackMsg)) echo ' has-feedback' ?>">
            <label class="control-label col-sm-3" for="inputEmail">Email</label>
				<div class="col-sm-3">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
    				 <?php	if(isset($inputEmailError) && $inputEmailError): ?>
    					 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
    				 <?php endif ?>
             </div>
    			 <?php if(isset($inputEmailFeedbackMsg)): ?>
    	       	 <div id="inputSuccess3Status" class="col-sm-4 help-block feedback" aria-hidden="true">
    			 		<span class="feedback-error"><?php echo $inputEmailFeedbackMsg; ?></span>
    				 </div>
    			 <?php endif ?>
        </div>

		  <!-- ---------------- 
		  inputAcceptConditions 
  		  ---------------- -->		  		  		  		  
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
		  
        <br>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                <input type="submit" class="btn btn-primary" value="Créer mon compte" name="boutonCreerCompte">
                <input type="reset" class="btn btn-default" value="Annuler">
            </div>
        </div>
		  
    </form>	

</div><!-- .row -->

</div>


