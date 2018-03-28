<?php

class Trajet extends Model {
	
	
	public static function create($nomTrajet, $id_voiture, $lieu_depart, $lieu_arrivee, $heure_depart, $heure_arrivee, $nbPlaces){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
		$requete = "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);";
			
		$trajet = Model::executeRequest($requete, array(':nom_trajet' => $nomTrajet, ':id_voiture' => $id_voiture, ':lieu_depart' => $lieu_depart, 
			':lieu_arrivee' => $lieu_arrivee, ':heure_depart' => $heure_depart, ':heure_arrivee' => $heure_arrivee, ':nombre_places' => $nbPlaces));
			
		return $trajet;
	}
	
	public static function connexion($login, $password){
		$requete = "SELECT password FROM utilisateur WHERE utilisateur.login = :login";
		$stmt = Model::executeRequest($requete, array(':login' => $login));
		return $stmt;
	}
	
	
	/* Eventuellement faire des accesseurs aux propriétés */
	public static function getEmailByLogin($login){
		$requete = "SELECT email FROM utilisateur WHERE utilisateur.login = :login";
		$user = Model::executeRequest($requete, array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	
	public static function getTelephoneByLogin($login){
		$requete = "SELECT telephone FROM utilisateur WHERE utilisateur.login = :login";
		$user = Model::executeRequest($requete, array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getPasswordByLogin($login){
		$requete = "SELECT password FROM utilisateur WHERE utilisateur.password = :password";
		$user = Model::executeRequest($requete, array(':password' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
   
}

?>