<?php

class Model extends MyObject {
	
	private static $BDD;
	
	protected static function executeRequest($requeteSQL,  $parameters = null){
		if ($parameters == null){
			$resultat = self::getBDD()-> getPDOInstance() -> query($requeteSQL);
		}
		else{
			$resultat = self::getBDD()-> getPDOInstance() -> prepare($requeteSQL);
			$resultat->execute($parameters);
		}
		return $resultat;
	}
	
	protected static function getBDD(){
		if(self::$BDD == null){
			self::$BDD = DataBasePDO::getInstance(); 
		}
		return Model::$BDD;
	}
   
}

?>