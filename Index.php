<?php 	

	// define __ROOT_DIR constant which contains the absolute path on disk
	// of the directory that contains this file (index.php)
	// e.g. http://isic.mines-douai.fr/web01/index.php => __ROOT_DIR = /home/web01/public_html
	$rootDirectoryPath = realpath(dirname(__FILE__));
	define ('__ROOT_DIR', $rootDirectoryPath );

	// define __BASE_URL constant which contains the URL PATH of the index.php
	// e.g. http://isic.mines-douai.fr/web01/index.php => __BASE_URL = /web01
	$base_url = explode('/',$_SERVER['PHP_SELF']);
	array_pop($base_url);
	define ('__BASE_URL', implode('/',$base_url) );
	
	// Load all application config
	require_once(__ROOT_DIR . "/config/config.php");
	
	// Load the Loader class to automatically load classes when needed
	require_once(__ROOT_DIR . '/classes/AutoLoader.class.php');
			
	// Reify the current request
	$request = Request::getCurrentRequest();
		
	$hasErrors = false;
	
	try {
		$controller = Dispatcher::dispatch($request);
		$controller->execute();
	} catch (Exception $e) {
		$hasErrors = true;
		if(__DEBUG)
			MyObject::staticlog('Error : ' . $e->getMessage() . "\n");
	}

	if(__DEBUG)
		MyObject::echoLogs();
	else
		if($hasErrors)
			include(__ROOT_DIR . 'templates/error.html');
		
	// print_r(User::create('Julou069874987489', 'Jules', 'Claussen', '1', '0777919638', 'jules.claussen@sfr.fr', 'testmdp')); // Test la création d'un utilisateur
	// print_r(User::getEmailByLogin('Julou06')); //Test la récupération d'email par login
	// print_r(Trajet::create('Trajet numero 9', '2', 'Douai', 'Lille', '2018-03-20 10:00:00', '2018-03-20 10:42:00', '5')); //Test création trajet - Attention format Date
	// print_r(User::changeEmailByLogin('Julou06', 'jules.claussen@sfr.fr')); // Change l'adresse mail de Julou06 en jules.claussen...
	// print_r(Trajet::recupererVoitures('14')); // Affiche la voiture du user 14

?>
