<?php
require_once 'config/conexion.php';
class userModel{
    //consultas 
    public function Logiar($usuario,$contrasenia){
        $conexion = new Conexion();
        $sql="SELECT * FROM ttrabajadores where usuario=:usuario AND contrasenia = :contrasenia";
        $stm=$conexion->getConectar()->prepare($sql);
        $stm->bindParam(':usuario',$usuario);
        $stm->bindParam(':contrasenia',$contrasenia);
        $stm->execute();
        $verificar=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $verificar;
        
    }


    public function registro($nombre,$Documento,$Direccion,$Telefono,$genero,$ciudad){
        $conexion = new Conexion();
        $sql="INSERT INTO tpersonas (nombre,Documento,Direccion,Telefono,genero,ciudad) values (:nombre, :Documento, :Direccion, :Telefono, :genero, : ciudad )";
        $stm=$conexion->getConectar()->prepare($sql);
        $stm->bindParam(':nombre',$nombre);
        $stm->bindParam(':Documento',$Documento);
        $stm->bindParam(':Direccion',$Direccion);
        $stm->bindParam(':Telefono', $Telefono);
        $stm->bindParam(':genero',$genero);
        $stm->bindParam(':ciudad',$ciudad);
        $stm->execute();



    }
}