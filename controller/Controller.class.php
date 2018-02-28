<?php

abstract class Controller extends MyObject {

	protected $request;

    public function __construct($myRequest) {
        $this->request = $myRequest;
    }
	
	abstract public function defaultAction($myRequest);
	
	public function execute(){
		$nomAction = $this->request->getActionName();
		$this -> $nomAction($this->request);
		
	}



}

?>