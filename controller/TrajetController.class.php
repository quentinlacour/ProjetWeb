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
	
	public function creationTrajet($request) {
		$view = new TrajetView($this, 'creerTrajet');
		$view->render();
	}
	
	public function chercheTrajet($request) {
		$date = $request->read('date');
		$heure = $request->read('heure');
		$lieuDepart = $request->read('lieuDepart');
		$lieuArrivee = $request->read('lieuArrivee');
		$dateHeure = $date . ' ' . $heure . ':00'; // pour être au format '2018-04-07 22:30:00';
		$trajets = Trajet::afficherTrajet($lieuDepart, $lieuArrivee, $dateHeure);
		// print_r($trajets['nom_trajet']); //marche aussi avec [0]
		// print_r($trajets['lieu_depart']);	
		// print_r($trajets['lieu_arrivee']);	
		// print_r($trajets['nombre_places']);	
		// print_r($trajets['heure_depart']);	
		
		$view = new TrajetView($this, 'rechercherAfficherTrajet');
		$view->render();
	}
}






?>