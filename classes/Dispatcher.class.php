<?php

class Dispatcher extends MyObject {

    public static function dispatch($myRequest){       

        $nomController = new Controller;
        ucfirst($nomController)::__construct($request);

        return $controller;
    }
}

?>