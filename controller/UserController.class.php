<?php

class UserController extends Controller {
	public function inscription($request) {
		$view = new AnonymousView($this);
		$view->render();
	}
   
}

?>