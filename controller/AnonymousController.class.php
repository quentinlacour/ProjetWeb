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
			$nom = $request->read('nom');
			$prenom = $request->read('prenom');
			$mail = $request->read('mail');
			$user = User::create($login, $password,$mail,$nom,$prenom);
			if(!isset($user)) {
				$view = new View($this,'inscription');
				$view->setArg('inscErrorText', 'Cannot complete inscription');
				$view->render();
			} 
			else {
				$newRequest = new Request();
				$newRequest->write('controller','user');
				$newRequest->write('user',$user->id());
				Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
			}
		}
   
	}
}

?>