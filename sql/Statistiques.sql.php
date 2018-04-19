<?php

	Trajet::addSqlRequest('nbTrajetParJour', "SELECT COUNT(id_trajet), DAYOFMONTH(heure_depart) FROM trajet GROUP BY DAYOFMONTH(heure_depart) ORDER BY DAYOFMONTH(heure_depart) ASC;");
	Trajet::addSqlRequest('nbTrajetParMois', "SELECT COUNT(id_trajet), MONTH(heure_depart) FROM trajet GROUP BY MONTH(heure_depart) ORDER BY MONTH(heure_depart) ASC;");
	Trajet::addSqlRequest('nbTrajetParAnnee', "SELECT COUNT(id_trajet), YEAR(heure_depart) FROM trajet GROUP BY YEAR(heure_depart) ORDER BY YEAR(heure_depart) ASC;;");
	
	Trajet::addSqlRequest('distanceParJour', "SELECT SUM(distance) FROM trajet GROUP BY ( DAYOFMONTH(trajet.heure_depart) )");
	Trajet::addSqlRequest('distanceParMois', "SELECT SUM(distance) FROM trajet GROUP BY ( MONTH(trajet.heure_depart) )");
	Trajet::addSqlRequest('distanceParAnnee', "SELECT SUM(distance) FROM trajet GROUP BY ( YEAR(trajet.heure_depart) )");
	
	Trajet::addSqlRequest('top10PersonnesCreatrices', "SELECT COUNT(id_trajet) AS nbDeTrajet, prenom_user, nom_user FROM utilisateur 
	JOIN trajet ON utilisateur.id_user = trajet.id_user GROUP BY utilisateur.id_user ORDER BY nbDeTrajet DESC LIMIT 10 ;");
	Trajet::addSqlRequest('top10PersonnesParticipatrices', "SELECT COUNT(id_trajet) AS nbDeTrajet, prenom_user, nom_user FROM utilisateur 
	JOIN participe ON utilisateur.id_user = participe.id_user GROUP BY utilisateur.id_user ORDER BY nbDeTrajet DESC LIMIT 10 ;");
	
	Trajet::addSqlRequest('top10VilleDepart', "SELECT COUNT(id_trajet) AS nbDeTrajet, nom_ville FROM trajet 
	JOIN ville ON trajet.lieu_depart = ville.nom_ville GROUP BY ville.nom_ville ORDER BY nbDeTrajet DESC LIMIT 10 ;");
	Trajet::addSqlRequest('top10VilleDestination', "SELECT COUNT(id_trajet) AS nbDeTrajet, nom_ville FROM trajet 
	JOIN ville ON trajet.lieu_arrivee = ville.nom_ville GROUP BY ville.nom_ville ORDER BY nbDeTrajet DESC LIMIT 10 ;");
	
	
	Trajet::addSqlRequest('nombreMoyenPersonneParTrajet', "SELECT AVG(nbParticipants) as avgPersonne
			FROM (
				SELECT COUNT(participe.id_user) as nbParticipants FROM participe GROUP BY participe.id_trajet
				) as subRequest, utilisateur
			JOIN participe ON participe.id_user = utilisateur.id_user
			GROUP BY participe.id_trajet
			ORDER BY avgPersonne DESC LIMIT 1 ;");
			
	Trajet::addSqlRequest('nombreMoyenEtapeParTrajet', "SELECT nom_trajet, AVG(nbEtapes) as avgEtapes
			FROM (
				SELECT COUNT(traverse.identifiant_OP) as nbEtapes FROM traverse GROUP BY traverse.identifiant_OP
				) as subRequest, trajet
			JOIN traverse ON traverse.id_trajet = trajet.id_trajet
			GROUP BY trajet.id_trajet
			ORDER BY avgEtapes DESC LIMIT 1 ;");
	
	
   
   
   


?>