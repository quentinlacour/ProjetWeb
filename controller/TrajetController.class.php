<?php

class TrajetController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
    }
	
	public function defaultAction($request) {
		$view = new TrajetView($this, 'mesTrajets');
		$view->render();
	}
	
   public function mesTrajets($request) {
		$view = new TrajetView($this, 'mesTrajets');
		$view->render();
	}
	
	public function statistiques($request) {
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	
	public function historiqueTrajets($request) {
		$view = new TrajetView($this, 'historique');
		$view->render();
	}
	
	public function rechercherTrajet($request) {
		$view = new TrajetView($this, 'rechercherTrajet');
		$view->render();
	}
	
	public function creerTrajet($request) {
		$view = new TrajetView($this, 'creerTrajet');
		$view->render();
	}
}

?>