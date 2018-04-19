<?php
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	// define (__DEBUG, false);
	define ('__DEBUG', true);

	if(__DEBUG) {
		error_reporting(E_ALL);
		ini_set("display_errors", E_ALL);
	} else {
		error_reporting(0);
		ini_set("display_errors", 0);
	}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DB
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	define('_MYSQL_HOST','localhost');
	define('_MYSQL_DBNAME','projetwebfinalavecvaleurs');
	define('_MYSQL_USER','root');
	define('_MYSQL_PASSWORD','root');
	

	// if($_SERVER['DOCUMENT_ROOT']=='D:\Mes Documents\Logiciels\Uwamp\www\ProjetWeb') {
		// define('_MYSQL_HOST','localhost');
		// define('_MYSQL_PORT',8889);	
		// define('_MYSQL_DBNAME','projetweb');
		// define('_MYSQL_USER','root');
		// define('_MYSQL_PASSWORD','root');
	// } else {
		// define('_MYSQL_HOST','localhost');
		// define('_MYSQL_DBNAME','jules_claussen');
		// define('_MYSQL_USER','jules.claussen');
		// define('_MYSQL_PASSWORD','RhKHudMI');		
	// }
	
?>
