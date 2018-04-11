<?php

class anonymousView extends View {
   public function render(){
	   
	   $this->loadTemplate($this->templateNames['head'], $this->args);
	   if($_SESSION['login'] == NULL){
			$this->loadTemplate($this->templateNames['menu'], $this->args);
	   }
	   else{
		   $this->loadTemplate($this->templateNames['menuUser'], $this->args);
	   }
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
   }

}

?>