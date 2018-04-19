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
		$trajets = Trajet::voirMesTrajets($_SESSION['id']);
		$view = new TrajetView($this, 'historiqueTrajets');
		$view -> setArg('mesTrajets', $trajets);
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
		$date = $request->read('date');
		$heure_depart = $request->read('heure_depart');
		$heure_arrivee = $request->read('heure_arrivee');
		$lieu_depart = $request->read('lieuDepart');
		$lieu_arrivee = $request->read('lieuArrivee');
		$nbPlaces = $request->read('nombrePlaces');
		$nomTrajet = $request->read('nomTrajet');
		$voiture = $request->read('voiture');
		
		$dateDepartHeure = $date . ' ' . $heure_depart . ':00';
		$dateArriveeHeure = $date . ' ' . $heure_arrivee . ':00';
		
		$id_voiture = Trajet::getIdByModele($voiture)[0][0]; //permet de récupérer l'id de la voiture selectionnée
		$trajets = Trajet::create($nomTrajet, $id_voiture, $lieu_depart, $lieu_arrivee, $dateDepartHeure, $dateDepartHeure, $nbPlaces, $_SESSION['id']);
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
		$nbTrajets = sizeof($trajets);
			
		
		$view = new TrajetView($this, 'rechercherAfficherTrajet');
		$view -> setArg('trajets', $trajets);
		$view->render();
	}
	
	public function inscription($request) {
		$idTrajet = $request->read('idTrajet');
		print_r($idTrajet);
		
		$trajet = Trajet::inscrireUtilisateurATrajet($_SESSION['id'], $idTrajet);
		$view = new TrajetView($this, 'historiqueTrajets');
		$view->render();
	}
	
	
	/* Fonction de statistiques */ 
	
	public function top10PersonnesCreatrices($request) {
		$trajet = Trajet::top10PersonnesCreatrices();
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	public function top10PersonnesParticipatrices($request) {
		$trajet = Trajet::top10PersonnesParticipatrices() ;
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	public function top10VilleDepart($request) {
		$trajet = Trajet::top10VilleDepart() ;
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	public function top10VilleDestination($request) {
		$trajet = Trajet::top10VilleDestination() ;
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	public function nombreMoyenPersonneParTrajet($request) {
		$trajet = Trajet::nombreMoyenPersonneParTrajet() ;
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	public function nombreMoyenEtapeParTrajet($request) {
		$trajet = Trajet::nombreMoyenEtapeParTrajet() ;
		$view = new TrajetView($this, 'statistiques');
		$view->render();
	}
	
}




?>