<?php

class Model extends MyObject {
	
	private static $BDD;
	protected static $tabRequetes;
	
	
	public static function addSqlRequest($key, $requete){
		static::$tabRequetes[$key] = $requete;
		
	}
	
	protected static function executeRequest($requeteSQL,  $parameters = null){
		if ($parameters == null){
			$resultat = static::getBDD()-> getPDOInstance() -> query($requeteSQL);
		}
		else{
			$resultat = static::getBDD()-> getPDOInstance() -> prepare($requeteSQL);
			$resultat->execute($parameters);
		}
		return $resultat;
	}
	
	protected static function executeRequest2($cleRequete,  $parameters = null){
		print_r(static::$tabRequetes);
		$requete = static::$tabRequetes[$cleRequete];
		print_r($requete);
		
		if ($parameters == null){
			$resultat = static::getBDD()-> getPDOInstance() -> query($requete);
		}
		else{
			$resultat = static::getBDD()-> getPDOInstance() -> prepare($requete);
			$resultat->execute($parameters);
		}
		return $resultat;
	}
	
	protected static function getBDD(){
		if(static::$BDD == null){
			static::$BDD = DataBasePDO::getInstance(); 
		}
		return static::$BDD;
	}
   
}

?>