<?php

require_once 'app/controller/user_controller.php';
require_once 'config/conexion.php';
require_once 'app/model/userModel.php';


$user_control = new user_controller();
$userModel = new userModel();


if(isset($_GET['action'])){
  $action = $_GET['action'];

  switch($action){
    case 'logiar':
        $user_control->login();
        
        break;
      case'vista':
        $user_control->verlogin();
        break;
    default:
        echo 'url no encontrada';
        break;
    }
       

 }else{
  require_once 'app/view/login.php';
 }

 
    