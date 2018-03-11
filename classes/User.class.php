<?php

class User extends Model {
	
	public static function isLoginUsed($login){
		$user = Model::executeRequest('select count(*) from utilisateur where utilisateur.login = :login', array(':login' => $login));
		foreach($user as $u){
			if($u['count(*)'] == 0){
				return false;
			}
			else{
				return true;
			}
		}
	}
	
	public static function create($login, $prenom, $nom, $admin, $telephone, $email){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
		$requete = "INSERT INTO `utilisateur`(`login`, `nom_user`, `prenom_user`, `est_admin`, `telephone`, `email`) VALUES (:login, :nom_user, :prenom_user, :est_admin, :telephone, 
							:email);";
		if (self::isLoginUsed($login)){
			echo 'Login déjà utilisé !';
			exit();
		}
		else{
			$user = Model::executeRequest($requete, array(':login' => $login, ':nom_user' => $nom, ':prenom_user' => $prenom, ':est_admin' => $admin, ':telephone' => $telephone, ':email' => $email));
		}
		return $user;
	}
	
	
	/* Eventuellement faire des accesseurs aux propriétés */
	public static function getEmailByLogin($login){
		$requete = "SELECT email FROM utilisateur WHERE utilisateur.login = :login";
		$user = Model::executeRequest($requete, array(':login' => $login));
		print_r($user);
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
		print_r($user);
		if($user == null){
			echo "Cet utilisateur n'existe pas !";
		}
		else{
			return $user->fetchAll();
		}
	}
   
}

?>