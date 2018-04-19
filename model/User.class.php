<?php

class User extends Model {

		/* Est-ce que le login est utilisé ? */
	public static function isLoginUsed($login){
		$user = Model::executeRequest('CountUsersWithLogin', array(':login' => $login));
		foreach($user as $u){
			if($u['count(*)'] == 0){
				return false;
			}
			else{
				return true;
			}
		}
	}
	
	/* Créer un utilisateur */
	public static function create($login, $prenom, $nom, $admin, $telephone, $email, $password){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
		if (self::isLoginUsed($login)){
			echo 'Login déjà utilisé !';
			exit();
		}
		else{
			$user = Model::executeRequest("CreateUser", array(':login' => $login, ':nom_user' => $nom, ':prenom_user' => $prenom, ':est_admin' => $admin, 
				':telephone' => $telephone, ':email' => $email, ':password' => $password));
		}
		return $user;
	}
	
	/* Créer une voiture */
	public static function creerVoiture($id_user, $modele, $couleur, $nombre_places){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
		$voiture = Model::executeRequest('creerVoiture', array(':id_user' => $id_user, ':modele' => $modele, ':couleur' => $couleur, 
				':nombre_places' => $nombre_places));
		return $voiture->fetchAll();
	}
	
	/* Vérifie que le couple login-password est bon */
	public static function connexion($login, $password){
		$stmt = Model::executeRequest("PrintPassword", array(':login' => $login));
		return $stmt;
	}
	
	
	/* ACCESSEURS AUX PROPRIETES */
	public static function getEmailByLogin($login){
		$user = Model::executeRequest("PrintEmail", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getTelephoneByLogin($login){
		$user = Model::executeRequest("PrintTelephone", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getNameByLogin($login){
		$user = Model::executeRequest("PrintName", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getIdByLogin($login){
		$user = Model::executeRequest("PrintId", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getPrenomByLogin($login){
		$user = Model::executeRequest("PrintPrenom", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	public static function getPasswordByLogin($login){
		$user = Model::executeRequest("PrintPassword", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
	
	
	/* MODIFICATION DES CHAMPS */
	public static function changePasswordByLogin($login, $password){
		$user = Model::executeRequest("ChangePassword", array(':password' => $password, ':login' => $login));
		return $user->fetchAll();
	}
	
	public static function changeEmailByLogin($login, $email){
		$user = Model::executeRequest("ChangeEmail", array(':email' => $email, ':login' => $login));
		return $user->fetchAll();
	}
	
	public static function changeTelephoneByLogin($login, $telephone){
		$user = Model::executeRequest("ChangeTelephone", array(':telephone' => $telephone, ':login' => $login));
		return $user->fetchAll();
	}
   
}




?>