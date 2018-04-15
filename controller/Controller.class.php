<?php

abstract class Controller extends MyObject {

	protected $request;

    public function __construct($myRequest) {
        $this->request = $myRequest;
		session_start();

    }
	
	public abstract function defaultAction($myRequest);
	
	public function execute(){
		$nomAction = $this->request->getActionName();
		$this -> $nomAction($this->request);
		
	}
	
	public function getActionName(){
		return $this->request->getActionName();
	}
	
	public function getControllerName(){
		return $this->request->getControllerName();
	}



}

?>