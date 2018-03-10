<?php

class DataBasePDO extends MyObject {
	
   private static $_BDD = null;
 
   private function __construct($adresseServeur, $login, $motDePasse){
	   $_BDD = new PDO($adresseServeur, $login, $motDePasse);
   }
   
   public static function getInstance() {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new Singleton();  
     }
 
     return self::$_instance;
   }

   
}

?>