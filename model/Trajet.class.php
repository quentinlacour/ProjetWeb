<?php

class Trajet extends Model {
	
	public static function create($nomTrajet, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nbPlaces){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
			
		$trajet = Model::executeRequest($requete, array(':nom_trajet' => $nomTrajet, ':id_voiture' => $id_voiture, ':lieu_depart' => $lieu_depart, 
			':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart, ':heure_arrivee' => $heure_arrivee, ':nombre_places' => $nbPlaces));
			
		return $trajet;
	}
	
	
	public static function afficherTrajet($lieu_depart, $lieu_arrivee, $heure_depart){
		$requete = "SELECT nom_trajet, lieu_depart, lieu_arrivee, nombre_places FROM trajet WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee
		AND heure_depart > :heure_depart;"
		
		$trajet = Model::executeRequest($requete, array(':lieu_depart' => $lieu_depart, ':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart));
		
		return $trajet;
	}
   
}

?>