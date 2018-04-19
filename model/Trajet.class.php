<?php

 
class Trajet extends Model {


	public static function create($nomTrajet, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nbPlaces, $id_user){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
			
		$cleRequete = 'CreateTrajet';
		$trajet = Model::executeRequest($cleRequete, array(':nom_trajet' => $nomTrajet, ':id_voiture' => $id_voiture, ':lieu_depart' => $lieu_depart,		
			':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart, ':heure_arrivee' => $heure_arrivee, ':nombre_places' => $nbPlaces, ':id_user' => $id_user));
			
		$id_trajet = Model::executeRequest('getIdTrajetByOtherParameters', array(':nom_trajet' => $nomTrajet, ':lieu_depart' => $lieu_depart, 
		':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart));
		$id_trajet = $id_trajet->fetchAll();
		
		Trajet::inscrireUtilisateurATrajet($_SESSION['id'], $id_trajet[0][0]);
			
		return $trajet;
	}
	
	
	public static function afficherTrajet($lieu_depart, $lieu_arrivee, $heure_depart){
		
		$cleRequete = "AfficherTrajet";		
		$trajet = Model::executeRequest($cleRequete, array(':lieu_depart' => $lieu_depart, ':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart));
		$result = $trajet->fetchAll();
		return $result;
	}
	
	public static function recupererVoitures($idUser){
		
		$cleRequete = "RecupererVoitures";		
		$trajet = Model::executeRequest($cleRequete, array(':id_user' => $idUser));
		$result = $trajet->fetchAll();
		return $result;
	}
	
	public static function getIdByModele($modele){
		
		$cleRequete = "RecupererIdVoiture";		
		$trajet = Model::executeRequest($cleRequete, array(':modele' => $modele));
		$result = $trajet->fetchAll();
		return $result;
	}
	
	public static function inscrireUtilisateurATrajet($id_user, $id_trajet){
		
		$cleRequete = "inscrireUserATrajet";		
		$trajet = Model::executeRequest($cleRequete, array(':id_user' => $id_user, ':id_trajet' => $id_trajet));
		$result = $trajet->fetchAll();
		return $result;
	}
	
	public static function voirMesTrajets($id_user){
		
		$cleRequete = "voirMesTrajets";		
		$trajet = Model::executeRequest($cleRequete, array(':id_user' => $id_user));
		$result = $trajet->fetchAll();
		return $result;
	}
   
}





?>