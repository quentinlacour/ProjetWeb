<?php

	Trajet::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");
			
	Trajet::addSqlRequest('AfficherTrajet', "SELECT nom_trajet, lieu_depart, lieu_arrivee, nombre_places FROM trajet WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee
		AND heure_depart > :heure_depart;");
   


?>