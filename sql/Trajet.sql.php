<?php

	Trajet::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");
			
	Trajet::addSqlRequest('AfficherTrajet', "SELECT id_trajet, nom_trajet, lieu_depart, lieu_arrivee, nombre_places, heure_depart FROM trajet WHERE lieu_depart = :lieu_depart 
	AND lieu_arrivee = :lieu_arrivee IN ( SELECT DATEDIFF(heure_depart, :heure_depart) FROM trajet ) >= 0;");
	
	Trajet::addSqlRequest('RecupererVoitures', "SELECT modele FROM voiture WHERE id_user = :id_user;");
	Trajet::addSqlRequest('RecupererIdVoiture', "SELECT id_voiture FROM voiture WHERE modele = :modele;");
	
	
	Trajet::addSqlRequest('inscrireUserATrajet', "INSERT INTO `participe`(`id_user`, `id_trajet`) VALUES (:id_user, :id_trajet)");
   


?>