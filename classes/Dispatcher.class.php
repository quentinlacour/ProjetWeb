<?php


class Dispatcher extends MyObject {
	
   protected static $dispatcher = NULL; //Creer un singleton du dispatcher
   
   public static function getCurrentDispatcher(){
      if(is_null(static::$dispatcher))
         static::$dispatcher = new static();  
	   return static::$dispatcher;
   }
	
	public static function dispatch($request) {
		return static::dispatchToController($request->getControllerName(),$request);
	}
   
	public static function dispatchToController($controllerName, $request) {
		$controllerClassName = ucfirst($controllerName) . 'Controller';

		if(!class_exists($controllerClassName))
			throw new Exception("$controllerName does not exists");

		return new $controllerClassName($request);
	}
	
}

?>