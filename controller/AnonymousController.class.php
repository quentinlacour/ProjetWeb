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
		$passwordVerif = $request->read('inscPassword2');
		$nom = $request->read('inputLastname');
		$prenom = $request->read('inputFirstname');
		$email = $request->read('inputEmail');
		$telephone = $request->read('inputTelephone');
		
		if(User::isLoginUsed($login)) {
			$view = new FormView($this,'inscription');
			$view->setArg('inscErrorText','This login is already used');
			$view->render();
		} 
		if($login == NULL || $nom == NULL || $prenom == NULL ||$password == NULL || $passwordVerif ==NULL){
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
				$newRequest = new Request();
				$newRequest->write('c','user');
				Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
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
			
		} 
		else {
			$user = User::connexion($login, $password);
			$tmp = $user->fetch();
			$nom = User::getNameByLogin($login)[0][0];
			$prenom = User::getPrenomByLogin($login)[0][0];
			$email = User::getEmailByLogin($login)[0][0];
			$telephone = User::getTelephoneByLogin($login)[0][0];
			$password = User::getPasswordByLogin($login)[0][0];
			$idUser = User::getIdByLogin($login)[0][0];
			
			$newRequest = new Request();
			if($password == $tmp['password']){
				$newRequest->write('c','user');
				session_start();
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
			else { // MODIFIER
				Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
				$view = new View($this, 'index');
				$view->render();
			}
		}
	}
}

?>