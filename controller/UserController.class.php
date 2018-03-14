<?php

class UserController extends Controller {
	
	
	
	public function defaultAction($request) {
		$view = new UserView($this);
		$view->render();
	}
	
	
	public function inscription($request) {
		$view = new AnonymousView($this);
		$view->render();
	}
   
}

?>