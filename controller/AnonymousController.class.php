<?php

class AnonymousController extends Controller {
	
	
	public function defaultAction($request) {
		$view = new View($this, 'index');
		$view->render();
	}
	
	public function inscription($request){
		$view = new View($this, 'inscription');
		$view->render();
	}
	
	public function validateInscription($request) {
		$login = $request->read('inscLogin');
		if(User::isLoginUsed($login)) {
			$view = new View($this,'inscription');
			$view->setArg('inscErrorText','This login is already used');
			$view->render();
		} 
		else {
			$password = $request->read('inscPassword');
			$nom = $request->read('inputLastname');
			$prenom = $request->read('inputFirstname');
			$email = $request->read('inputEmail');
			$telephone = $request->read('inputTelephone');
			$user = User::create($login, $prenom, $nom, 0, $telephone, $email, $password);
			if(!isset($user)) {
				$view = new View($this,'inscription');
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
			// print_r($tmp);
			if($password == $tmp['password']){
				$newRequest = new Request();
				$newRequest->write('c','user');
				$newRequest->write('a','defaultAction');
				Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
				$view = new UserView($this, 'index');
				$view->render();
			}
			else {
				$newRequest = new Request();
				Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
				$view = new View($this, 'inscription');
				$view->render();
			}
		}
	}
}

?>