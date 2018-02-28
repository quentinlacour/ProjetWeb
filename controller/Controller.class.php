<?php

abstract class Controller extends MyObject {


    public function __construct($myRequest) {
        $this->request = $request;
    }
	
	public abstract function defaultAction($myRequest);
	
	public static function execute($myRequest){
		$monControlleur = Dispatcher::dispatch($myRequest);
		
	
	}


}

?>