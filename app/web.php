<?php

    require_once('core/route.php');
    use app\core\Route;

    $route = new Route();

    $route->get('/',function(){
        return view('home');
    });
    $route->get('index','MainController@index');

?>