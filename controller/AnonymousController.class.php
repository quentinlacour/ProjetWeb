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
   
}

?>