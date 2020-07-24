<?php

    namespace app\core;
    class App {

        protected $controller = 'MainController';
        protected $method = 'index';
        protected $params = [];

        function __construct(){
            
        }

        function parseUrl(){
            if(isset($_GET['url'])){
                $url =filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL);
                return $url;
            }
        }

    }

?>