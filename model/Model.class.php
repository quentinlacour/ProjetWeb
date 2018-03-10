<?php

class Model extends MyObject {
	private static $BDD;
	
	protected function executeRequest($requeteSQL,  $parameters = null){
		if ($parameters == null){
			$resultat = self::getBDD()->getInstance()->query($requeteSQL);
		}
		else{
			$resultat = self::getBDD()->getInstance()->prepare($requeteSQL, $parameters);
		}
		return $resultat;
	}
	
	protected function getBDD(){
		if($BDD == null){
			$BDD = DataBasePDO::getInstance(); 
		}
		return Model::$BDD;
	}
   
}

?>