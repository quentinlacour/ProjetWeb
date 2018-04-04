<?php

class Request extends MyObject {
     
   protected static $singleton = NULL;
   
   public static function getCurrentRequest(){
      if(is_null(static::$singleton))
         static::$singleton = new static();  
	   return static::$singleton;
   }

   // ==============
   // Public API
   // ==============

	// return the name of the controller that should process this request
	// according to its parameters or 'Anonymous' if none has been passed
   public function getControllerName() {
      if(isset($_GET['c']))
			return $_GET['c'];
		return 'Anonymous';
   }

	// return the name of the action to execute for this request
   public function getActionName() {
      if(isset($_GET['a']))
			return $_GET['a'];
		return 'defaultAction';
   }
 
   public function debug() {
      echo "Request Parameters : \nGET=";
      print_r($_GET);
      echo "\nPOST=";
      print_r($_POST);
      echo "\n";
   } 
   
   public function read($params){
	   if(isset($_GET[$params])){
		   return $_GET[$params];
	   }
	   if(isset($_POST[$params])){
		   return $_POST[$params];
	   }
	   // return "";
	   throw new Exception ("The parameter ".$params." isn't defined in the request \n", $this->debug());
   }
   
   public function write($params, $value){
	   $_GET[$params] = $value;
   }
   
}

?>