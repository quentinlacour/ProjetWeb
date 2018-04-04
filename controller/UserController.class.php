<?php

class UserController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
		session_start();
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
	
	
	public function enregistrerInfos($request){
		$email = $request->read('emailChg');
		$telephone = $request->read('telephoneChg');
		$password = $request->read('passwordChg');
		$password2 = $request->read('password2Chg');
		$login = $_SESSION["login"];

		if($email != ""){
			User::changeEmailByLogin($login, $email);
		}
		if($telephone != ""){
			User::changeTelephoneByLogin($login, $telephone);
		}
		if($password != ""){
			if($password2 == $password){
				User::changePasswordByLogin($login, $password);
			}
			else{
				echo 'Les deux mots de passe ne sont pas similaire';
			}
		}
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
   
}

?>