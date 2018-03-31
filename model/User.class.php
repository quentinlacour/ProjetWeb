<?php

class User extends Model {


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
	
	public static function connexion($login, $password){
		$stmt = Model::executeRequest("PrintPassword", array(':login' => $login));
		return $stmt;
	}
	
	
	/* Eventuellement faire des accesseurs aux propriétés */
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
	
	public static function getPasswordByLogin($login){
		$user = Model::executeRequest("PrintPassword", array(':login' => $login));
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
   
}

?>