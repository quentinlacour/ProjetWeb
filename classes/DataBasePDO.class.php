<?php

class DataBasePDO extends MyObject {
	
	private $PDOInstance = null;
	private static $_BDD = null;
 
   private function __construct(){
		$this->PDOInstance = new PDO('mysql:dbname='._MYSQL_DBNAME.';host='._MYSQL_HOST,_MYSQL_USER,_MYSQL_PASSWORD);
   }
   
   public static function getInstance() {
 
     if(is_null(static::$_BDD)) {
		 static::$_BDD = new DataBasePDO();  
     }
 
     return static::$_BDD;
   }
   
   public function getPDOInstance(){
	   return $this->PDOInstance;
   }
   
}

?>