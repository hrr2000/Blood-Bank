<?php
    $core = dirname(__FILE__).'/core'; // path of core files
    $controllers = dirname(__FILE__).'/controllers'; // path of controllers
    $models = dirname(__FILE__).'/models'; // path of models 
    $helpers = dirname(__FILE__).'/helpers'; // path of helpers 


    function autoloader($dir){
        $contents = glob($dir.'/*'); // get contents
        foreach($contents as $file){
            if(glob($file.'/*')){  
                autoloader($file);  
            }else{
                if($tmp = explode('.',$file)){
                    if($tmp[count($tmp)-1] == 'php') {  // check if the file is has .php extension 
                        require_once($file);  // include files 
                    }
                }
            }
        }
    }

    autoloader($core);  // must be at first because it has the BASE CLASSES
    autoloader($helpers); 
    autoloader($controllers);
    autoloader($models);


?>