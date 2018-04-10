<?php

	Trajet::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");
			
	Trajet::addSqlRequest('AfficherTrajet', "SELECT nom_trajet, lieu_depart, lieu_arrivee, nombre_places, heure_depart FROM trajet WHERE lieu_depart = :lieu_depart 
	AND lieu_arrivee = :lieu_arrivee AND ( SELECT DATEDIFF(heure_depart, :heure_depart) FROM trajet ) >= 0;");
	
	Trajet::addSqlRequest('RecupererVoitures', "SELECT modele FROM voiture WHERE id_user = :id_user;");
   


?>