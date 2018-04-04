<?php

	User::addSqlRequest('CreateUser', "INSERT INTO `utilisateur`(`login`, `nom_user`, `prenom_user`, `est_admin`, `telephone`, `email`, `password`) 
	VALUES (:login, :nom_user, :prenom_user, :est_admin, :telephone, :email, :password);");
			
	User::addSqlRequest('CountUsersWithLogin', 'select count(*) from utilisateur where utilisateur.login = :login');
	
	
	User::addSqlRequest('PrintPassword', "SELECT password FROM utilisateur WHERE utilisateur.login = :login");
	User::addSqlRequest('PrintEmail', "SELECT email FROM utilisateur WHERE utilisateur.login = :login");
	User::addSqlRequest('PrintTelephone', "SELECT telephone FROM utilisateur WHERE utilisateur.login = :login");
	User::addSqlRequest('PrintName', "SELECT nom_user FROM utilisateur WHERE utilisateur.login = :login");
	User::addSqlRequest('PrintPrenom', "SELECT prenom_user FROM utilisateur WHERE utilisateur.login = :login");
	
	User::addSqlRequest('ChangeEmail', "UPDATE `utilisateur` SET`email`= :email WHERE login = :login");
	User::addSqlRequest('ChangePassword', "UPDATE `utilisateur` SET`password`= :password WHERE login = :login");
	User::addSqlRequest('ChangeTelephone', "UPDATE `utilisateur` SET`telephone`= :telephone WHERE login = :login");
   


?>