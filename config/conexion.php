<?php
class Conexion{
    public $url ='mysql:host=localhost;dbname=db_ferreteria';
    public $usuario = "root";
    public $contrasena ='';
    public $conexion  ;

   
    public function getConectar(){
       
    $conexion = new PDO ($this->url,$this->usuario,$this->contrasena);

    return $conexion;
    }

}

