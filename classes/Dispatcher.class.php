<?php

class Dispatcher extends MyObject {

    public static function dispatch($myRequest){       

        $nomController = Request::getControllerName();
        ucfirst($nomController)->__construct($myRequest);

        return $controller;
    }
}

?>