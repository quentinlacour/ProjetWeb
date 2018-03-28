<?php

	User::addSqlRequest('Create_Trajet', "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, `nombre_places`) 
			VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places);");
			
	User::addSqlRequest('Afficher_Trajet', "SELECT nom_trajet, lieu_depart, lieu_arrivee, nombre_places FROM trajet WHERE lieu_depart = :lieu_depart AND lieu_arrivee = :lieu_arrivee
		AND heure_depart > :heure_depart;");
   


?>