<?php
class Conexion{
    public $url ='mysql:host=localhost;dbname=gestionferreteria';
    public $usuario = "root";
    public $contrasena ='';
    public $conexion  ;

    public  function __construct(){
        
        try{
            $this->conexion = new PDO ($this->url,$this->usuario,$this->contrasena);
            echo "Se conecto a la base de datos";
        }catch(PDOExeption $ex){
            echo $ex->getMessage();
          
        }
    }
}

$conexion = new Conexion();

