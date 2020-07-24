<?php

    use app\core\Controller;


    class MainController extends Controller{
        public function index(){
            return view('home');
        }
    }
?>