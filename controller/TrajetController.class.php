<?php

class TrajetController extends Controller {
	
	public function defaultAction($request) {
		$view = new TrajetView($this, 'mesTrajets');
		$view->render();
	}
	
   public function mesTrajets($request) {
		$view = new TrajetView($this, 'mesTrajets');
		$view->render();
	}
	
}

?>