<?php

    namespace app\core;
    class Route{
        
        /*
        * Here Routes are stored
        * array of array 
        * example  ['GET' => ['index' => 'HomeController@index'] , 'POST' => [..,..,.] , ..]
        */
        protected $routes = [[]];

        // ----- add a route with GET Verb 
        public function get($url,$method){
            $this->addRoute('GET',$url,$method);
        }

        // ----- push the route to $routes 
        public function addRoute($request,$url,$method){
            $url = ltrim($url,'/');
            $this->routes[$request][$url] = $method;
        }


        // ----- open the requested route 
        public function getRoute($request,$url){
            
            // checks if the route is exist
            if(in_array($url,array_keys($this->routes[$request]))){

                $response = $this->routes[$request][$url];

                 // checks if the route callback is a Closure or a string
                if($response instanceof \Closure){  

                    return $response(); //in case of closure do the function

                }else if(gettype($response) == gettype('String')){

                    $parts = explode('@',$response); // e.g. response = 'HomeController@index' parts = ['HomeController','index']
                    
                    if(class_exists($parts[0])){ // check if the controller is exist
                        return call_user_func([ $parts[0] , 'index' ]);  // execute the function by it's name
                    }else{
                        throw new \Exception('No such Controller ('.$parts[0].')');
                    }
                }

            }else{
                Error::abort(404);
            }

           

        }

    }
?>