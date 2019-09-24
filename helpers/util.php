<?php

class Utils{

    public static function usuario(){
        if(!isset($_SESSION['identificar'])){
        header("location:".base_url);    
        }
        }
        
        
        public static function administador(){
        if(!isset($_SESSION['admin'])){
        header("location:".base_url);    
        }
    }
        

    
public static function deletesession($name){
if(isset($_SESSION[$name])){
$_SESSION[$name] = null;
}

return $name;
}


}