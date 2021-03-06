<?php

class AnonymousController extends Controller {
	
	
	public function defaultAction($request) {
		$view = new View($this, 'index');
		$view->render();
	}
	
	public function inscription($request){
		$view = new FormView($this, 'inscription');
		$view->render();
	}
	
	public function validateInscription($request) {
		$login = $request->read('inscLogin');
		$password = $request->read('inscPassword');
		$nom = $request->read('inputLastname');
		$prenom = $request->read('inputFirstname');
		$email = $request->read('inputEmail');
		$telephone = $request->read('inputTelephone');
		
		if(User::isLoginUsed($login)) {
			$view = new FormView($this,'inscription');
			$view->setArg('inscErrorText','This login is already used');
			$view->render();
		} 
		if($login == NULL || $nom == NULL || $prenom == NULL ||$password == NULL){
			$view = new FormView($this,'inscription');
			$view->render();
			echo "<legend align='center' style='Color:Red;'> Il manque des informations importantes </legend>";
		}
		
		else {
			$user = User::create($login, $prenom, $nom, 0, $telephone, $email, $password);

			if(!isset($user)) {
				$view = new FormView($this,'inscription');
				$view->setArg('inscErrorText', 'Cannot complete inscription');
				$view->render();
			} 
			else {
				$view = new View($this,'index');
				$view->render();
			}
		}
   
	}
	
	public function validateConnection($request) {
		$login = $request->read('login');
		$password = $request->read('password');
		if(!User::isLoginUsed($login)) {
			$view = new View($this,'index');
			$view->setArg('inscErrorText',"Ce login n'existe pas");
			$view->render();
			echo "<legend align='center' style='Color:Red; position: absolute; top: 100px;'> Erreur de login </legend>";
			
		} 
		else {
			$nom = User::getNameByLogin($login)[0][0];
			$prenom = User::getPrenomByLogin($login)[0][0];
			$email = User::getEmailByLogin($login)[0][0];
			$telephone = User::getTelephoneByLogin($login)[0][0];
			$truePassword = User::getPasswordByLogin($login)[0][0];
			$idUser = User::getIdByLogin($login)[0][0];


			
			if($password == $truePassword){
				$_SESSION["login"] = $login;
				$_SESSION["nom"] = $nom;
				$_SESSION["prenom"] = $prenom;
				$_SESSION["email"] = $email;
				$_SESSION["telephone"] = $telephone;
				$_SESSION["password"] = $password;
				$_SESSION["id"] = $idUser;
				$view = new UserView($this, 'index');
				$view->render();
			}
			else {
				$view = new View($this, 'index');
				$view->render();
				echo "<legend align='center' style='Color:Red; position: absolute; top: 100px;'> Erreur de Mot de passe </legend>";
			}
		}
	}
}

?>