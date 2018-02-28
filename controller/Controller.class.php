<?php

abstract class Controller extends MyObject {

	protected $request;

    public function __construct($myRequest) {
        $this->request = $myRequest;

    }
	
	public abstract function defaultAction($myRequest);
	
	public function execute(){
		$nomAction = $this->request->getActionName();
		$this -> $nomAction($this->request);
		
	}



}

?>