<?php

    require_once('autoloader.php'); // loads all classes 
    require_once('web.php'); // loads the defined routes 


    $app = new app\core\App();
    
    echo $route->getRoute($_SERVER['REQUEST_METHOD'],$app->parseUrl());
?>