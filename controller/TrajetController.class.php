<?php

class UserController extends Controller {
	
	public function defaultAction($request) {
		$view = new UserView($this, 'mesTrajets');
		$view->render();
	}
	
   
}

?>