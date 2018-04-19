<?php

class UserController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
    }
	
	
	public function defaultAction($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}
	
	public function inscription($request) {
		$view = new View($this, 'inscription');
		$view->render();
	}
	
	public function index($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}	
	
	public function monCompte($request) {
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
	
	public function seDeconnecter($request) {
		session_destroy();
		
		$view = new AnonymousView($this, 'index');
		$view->render();
	}
	
	
	public function enregistrerInfos($request){
		$email = $request->read('emailChg');
		$telephone = $request->read('telephoneChg');
		$password = $request->read('passwordChg');
		$password2 = $request->read('password2Chg');
		$login = $_SESSION["login"];

		if($email != ""){
			$_SESSION["email"] = $email;
			User::changeEmailByLogin($login, $email);
		}
		if($telephone != ""){
			$_SESSION["telephone"] = $telephone;
			User::changeTelephoneByLogin($login, $telephone);
		}
		if($password != ""){
			if($password2 == $password){
				$_SESSION["password"] = $password;
				User::changePasswordByLogin($login, $password);
			}
			else{
				echo 'Les deux mots de passe ne sont pas similaire';
			}
		}
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
	
	public function creerVoiture($request) {
		$id_user = $_SESSION['id'];
		$modele = $request->read('modele');
		$couleur = $request->read('couleur');
		$nombre_places = $request->read('nombre_places');
		User::creerVoiture($id_user, $modele, $couleur, $nombre_places);
		
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
   
}




?>