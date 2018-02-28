<?php

class Request extends MyObject {

    private $controllerName;
    private $actionName;

    protected static $singleton;

     
    public static function getCurrentRequest() {
        if(is_null(static::$singleton)){
            static::$singleton = new static();
        }
        return static::$singleton;

    }

    public function __construct( ) {
        
    }

    public static function getControllerName (){

        $controllerName;

        if (!isset ($_GET["action"])){
            $controllerName= "AnonymousController";
        }

        else {
            $controllerName = ($_GET["controller"]); 
        }
        //echo ($controllerName);
        return ($controllerName);  
    }
    
    public static function getActionName (){

        $actionName;

        if (!isset ($_GET["action"])){
            $actionName= "defaultAction";
        }

        else {
            $actionName = ($_GET["action"]); 
        }
        //echo ($actionName);
        return ($actionName);     
    }  
 }
?>
