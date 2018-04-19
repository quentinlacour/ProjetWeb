<?php

	Trajet::addSqlRequest('CreateTrajet', "INSERT INTO `trajet`(`nom_trajet`, `id_voiture`, `lieu_depart`, `lieu_arrivee`, `heure_depart`, `heure_arrivee`, 
	`nombre_places`, `id_user`) VALUES (:nom_trajet, :id_voiture, :lieu_depart, :lieu_arrivee, :heure_depart, :heure_arrivee, :nombre_places, :id_user);");
		
	Trajet::addSqlRequest('AfficherTrajet', "SELECT id_trajet, nom_trajet, lieu_depart, lieu_arrivee, nombre_places, heure_depart FROM trajet WHERE lieu_depart = :lieu_depart 
	AND lieu_arrivee = :lieu_arrivee AND heure_depart >= :heure_depart AND heure_depart <= :heure_depart + INTERVAL 3 HOUR");
	
	TRAJET::addSqlRequest('getIdTrajetByOtherParameters', "SELECT id_trajet FROM trajet WHERE nom_trajet = :nom_trajet AND lieu_depart = :lieu_depart
	AND lieu_arrivee = :lieu_arrivee AND heure_depart = :heure_depart;");
	
	Trajet::addSqlRequest('RecupererVoitures', "SELECT modele, couleur FROM voiture WHERE id_user = :id_user;");
	Trajet::addSqlRequest('RecupererIdVoiture', "SELECT id_voiture FROM voiture WHERE modele = :modele;");
	
	
	Trajet::addSqlRequest('inscrireUserATrajet', "INSERT INTO `participe`(`id_user`, `id_trajet`) VALUES (:id_user, :id_trajet)");
	
	Trajet::addSqlRequest('voirMesTrajets', "SELECT trajet.id_trajet, nom_trajet, lieu_depart, lieu_arrivee, nombre_places, heure_depart FROM trajet 
	JOIN participe ON participe.id_trajet = trajet.id_trajet WHERE trajet.id_user = :id_user");
	
	Trajet::addSqlRequest('nbTrajetParJour', "SELECT COUNT(id_trajet), DAYOFMONTH(heure_depart) FROM trajet GROUP BY DAYOFMONTH(heure_depart) ORDER BY DAYOFMONTH(heure_depart) ASC;");
	Trajet::addSqlRequest('nbTrajetParMois', "SELECT COUNT(id_trajet), MONTH(heure_depart) FROM trajet GROUP BY MONTH(heure_depart) ORDER BY MONTH(heure_depart) ASC;");
	Trajet::addSqlRequest('nbTrajetParAnnee', "SELECT COUNT(id_trajet), YEAR(heure_depart) FROM trajet GROUP BY YEAR(heure_depart) ORDER BY YEAR(heure_depart) ASC;;");
	
	Trajet::addSqlRequest('distanceParJour', "SELECT SUM(distance) FROM trajet GROUP BY ( DAYOFMONTH(trajet.heure_depart) )");
	Trajet::addSqlRequest('distanceParMois', "SELECT SUM(distance) FROM trajet GROUP BY ( MONTH(trajet.heure_depart) )");
	Trajet::addSqlRequest('distanceParAnnee', "SELECT SUM(distance) FROM trajet GROUP BY ( YEAR(trajet.heure_depart) )");
	
	Trajet::addSqlRequest('top10PersonnesCreatrices', "SELECT COUNT(id_trajet) AS nbDeTrajet, prenom_user, nom_user FROM utilisateur 
	JOIN trajet ON utilisateur.id_user = trajet.id_user GROUP BY utilisateur.id_user ORDER BY nbDeTrajet DESC LIMIT 10 ;");
	Trajet::addSqlRequest('top10PersonnesParticipatrices', "SELECT prenom_user, nom_user, nombre_trajets_realises FROM utilisateur 
	ORDER BY nombre_trajets_realises DESC LIMIT 10 ;");
	Trajet::addSqlRequest('top10VilleDepart', "SELECT prenom_user, nom_user, nombre_trajets_realises FROM utilisateur 
	ORDER BY nombre_trajets_realises DESC LIMIT 10 ;");
	Trajet::addSqlRequest('top10VilleDestination', "SELECT prenom_user, nom_user, nombre_trajets_realises FROM utilisateur 
	ORDER BY nombre_trajets_realises DESC LIMIT 10 ;");
	
	
	Trajet::addSqlRequest('nombreMoyenPersonneParTrajet', "SELECT prenom_user, nom_user, participe.id_trajet, AVG(nbParticipants) as avgPersonne
			FROM (
				SELECT COUNT(participe.id_user) as nbParticipants FROM participe GROUP BY participe.id_trajet
				) as subRequest, utilisateur
			JOIN participe ON participe.id_user = utilisateur.id_user
			GROUP BY participe.id_trajet
			ORDER BY avgPersonne DESC LIMIT 10 ;");
			
	Trajet::addSqlRequest('nombreMoyenEtapeParTrajet', "SELECT nom_trajet, AVG(nbEtapes) as avgEtapes
			FROM (
				SELECT COUNT(traverse.identifiant_OP) as nbEtapes FROM traverse GROUP BY traverse.identifiant_OP
				) as subRequest, trajet
			JOIN traverse ON traverse.id_trajet = trajet.id_trajet
			GROUP BY trajet.id_trajet
			ORDER BY avgEtapes DESC LIMIT 10 ;");
	
	
   
   
   


?>