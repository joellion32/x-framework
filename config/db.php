<?php

class Database{
  
public function conexion(){
$conexion = new mysqli("localhost" , "root" , "" , "base_de_datos");
$conexion->query("SET NAMES utf8");
return $conexion;
}    

}