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
	
	public function index($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}
	
	public function inscription($request) {
		$view = new View($this, 'inscription');
		$view->render();
	}
	
	public function monCompte($request) {
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
	
	public function mesTrajets($request) {
		$view = new UserView($this, 'mesTrajets');
		$view->render();
	}
	
	public function enregistrerInfos($request){
		$email = $request->read('emailChg');
		$telephone = $request->read('telephoneChg');
		$password = $request->read('passwordChg');
		$password2 = $request->read('password2Chg');
		if($email == "")
			echo 'test';
	}
   
}

?>