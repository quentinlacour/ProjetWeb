<?php

/*
* Analyses a request, created the right Controller passing it the request
*/

class Dispatcher extends MyObject {
	
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