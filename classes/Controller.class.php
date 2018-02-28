<?php

abstract class Controller extends MyObjects {


    public function __construct($myRequest) {
        $controller = new Controller;
    }
	
	abstract public function defaultAction($myRequest);
	
	public static function execute($myRequest){
		$monControlleur = Dispatcher::dispatch($myRequest);
		
	
	}


}

?>