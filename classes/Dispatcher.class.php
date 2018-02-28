<?php

class Dispatcher extends MyObject {

    public static function dispatch($request) {
		return static::dispatchToController($request->getControllerName(),$request);
	}
   
	public static function dispatchToController($controllerName, $request) {
		$controllerClassName = ucfirst($controllerName);

		if(!class_exists($controllerClassName))
			throw new Exception($controllerName);

		return new $controllerClassName($request);
	}
}

?>