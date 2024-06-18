<?php
class user_controller{

    public function verlogin(){
        require_once 'app/view/login.php';
    }

    
    public function login(){
        $modelo_user = new userModel();
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            // var_dump($usuario);
            // var_dump($contrasenia);
            if($usuario=$modelo_user->logiar($usuario, $contrasenia)){
                echo "<script> alert('usuario encontrado'); </script>";
                require_once 'app/view/inicio.php';
                
            }
            else{
                echo "<script> alert('error credenciales no coinciden'); </script>";
                require_once 'app/view/login.php';

            }
          
            
        //    if(password_verify($_POST["contrasenia"],$verificar["contrasenia"])){
        //     $_SESSION['usuario']=$verificar;
            
        //    }
        }
    }

    public function registrar(){
        $modelo_user = new userModel();
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $nombre = $_POST['nombre'];
            $Documento = $_POST['Documento'];
            $Direccion = $_POST['Direccion'];
            $Telefono = $_POST['Telefono'];
            $ciudad = $_POST['ciudad'];
            
        }
    }
}

