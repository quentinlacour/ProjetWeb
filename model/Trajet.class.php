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
   
<<<<<<< HEAD


=======
>>>>>>> 8f9b8b2ede6c6aa42b0f23795943588df6f94788


													/* Fonctions de statistiques */

	public static function nbTrajetParJour(){	
<<<<<<< HEAD
	$cleRequete = "nbTrajetParJour";		
	$trajet = Model::executeRequest($cleRequete);
	$result = $trajet->fetchAll();
	return $result;
}
public static function nbTrajetParMois(){	
	$cleRequete = "nbTrajetParMois";		
	$trajet = Model::executeRequest($cleRequete);
	$result = $trajet->fetchAll();
	return $result;
}
public static function nbTrajetParAnnee(){	
	$cleRequete = "nbTrajetParAnnee";		
	$trajet = Model::executeRequest($cleRequete);
	$result = $trajet->fetchAll();
	return $result;
}

/*La distance n'a pas été mise dans la base de données puisqu'elle n'est pas réellement utile pour l'utilisateur*/
public static function distanceParJour(){	
	$cleRequete = "distanceParJour";		
	$trajet = Model::executeRequest($cleRequete);
	// $result = $trajet->fetchAll();
	return $trajet;
}
public static function distanceParMois(){	
	$cleRequete = "distanceParMois";		
	$trajet = Model::executeRequest($cleRequete);
	// $result = $trajet->fetchAll();
	return $trajet;
}
public static function distanceParAnnee(){	
	$cleRequete = "distanceParAnnee";		
	$trajet = Model::executeRequest($cleRequete);
	// $result = $trajet->fetchAll();
	return $trajet;
}

=======
		$cleRequete = "nbTrajetParJour";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function nbTrajetParMois(){	
		$cleRequete = "nbTrajetParMois";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function nbTrajetParAnnee(){	
		$cleRequete = "nbTrajetParAnnee";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
>>>>>>> 8f9b8b2ede6c6aa42b0f23795943588df6f94788

	/*La distance n'a pas été mise dans la base de données puisqu'elle n'est pas réellement utile pour l'utilisateur*/
	public static function distanceParJour(){	
		$cleRequete = "distanceParJour";		
		$trajet = Model::executeRequest($cleRequete);
		// $result = $trajet->fetchAll();
		return $trajet;
	}
	public static function distanceParMois(){	
		$cleRequete = "distanceParMois";		
		$trajet = Model::executeRequest($cleRequete);
		// $result = $trajet->fetchAll();
		return $trajet;
	}
	public static function distanceParAnnee(){	
		$cleRequete = "distanceParAnnee";		
		$trajet = Model::executeRequest($cleRequete);
		// $result = $trajet->fetchAll();
		return $trajet;
	}
	
	public static function top10PersonnesCreatrices(){	
		$cleRequete = "top10PersonnesCreatrices";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function top10PersonnesParticipatrices(){	
		$cleRequete = "top10PersonnesParticipatrices";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function top10VilleDepart(){	
		$cleRequete = "top10VilleDepart";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function top10VilleDestination(){	
		$cleRequete = "top10VilleDestination";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function nombreMoyenPersonneParTrajet(){	
		$cleRequete = "nombreMoyenPersonneParTrajet";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	public static function nombreMoyenEtapeParTrajet(){	
		$cleRequete = "nombreMoyenEtapeParTrajet";		
		$trajet = Model::executeRequest($cleRequete);
		$result = $trajet->fetchAll();
		return $result;
	}
	
}
}

?>