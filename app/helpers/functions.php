<?php
    define('BASE_DIR','/blood/public/');
    function view($view){
        $view = str_replace('.','/',$view);
        require_once(dirname(__FILE__).'/../views/'.$view.'.php');
    }
    function asset($url){
        $url = ltrim($url,'/');
        return BASE_DIR.'assets/'.$url;
    }
?>