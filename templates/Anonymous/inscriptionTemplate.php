
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

</br></br></br></br></br></br></br></br>



<div class="container auth">
    <div id="big-form" class="well auth-box">
      <form action="index.php?a=validateInscription" method="post">
        <fieldset>

          <!-- Form Name -->
          <legend align="center">Rejoignez nous ! </legend>


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
  
  