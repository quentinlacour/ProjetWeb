<?php

class UserView extends View {
	
	public function render(){
		$this->templateNames['top'] = 'topUser';
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['top'], $this->args);
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
   }

}

?>