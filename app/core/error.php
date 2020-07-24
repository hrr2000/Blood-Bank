<?php

    namespace app\core;

    class Error{

        static public function abort($n){
            http_response_code($n);
        }

    }