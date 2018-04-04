<?php

class UserView extends View {
	
	public function __construct($controller, $templateName, $args = array()) {
		parent::__construct($controller, $templateName, $args = array());
		$this->templateNames['head'] = 'User/head';
		$this->templateNames['menu'] = 'User/menuUser';
	} 
   
	public function render(){
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['menu'], $this->args);
		$this->loadTemplate('User/' . $this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
   }

}

?>