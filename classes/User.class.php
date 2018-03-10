<?php

class User extends Model {
	
	public static isLoginUsed($login){ //Dans notre cas, on prend une addresse mail
		$user = Model::executeRequest('select count(*) from utilisateur where utilisateur.email = :login', array(':email' => login));
		foreach($user as $u){
			if($u['count(*)'] == 0){
				return false;
			}
			else{
				return true;
			}
		}
	}
	
	public static create($prenom, $nom, $admin, $telephone, $email){ /* Changer dans la base de donnnées le champ "NULL" pour avoir des champs non obligatoires */
		$requete = 'INSERT INTO `utilisateur`(`nom_user`, `prenom_user`, `est_admin`, `telephone`, `email`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])';
		if (isLoginUsed($email)){
			echo 'Vous êtes déjà inscrit !';
			exit();
		}
		else{
			$user = executeRequest($requete, array(':nom_user' => $nom, ':prenom_user' => $prenom, ':est_admin' => $admin, ':telephone' => $telephone, ':email' => $email);
		}
		return $user;
	}
	
	
   
}

?>