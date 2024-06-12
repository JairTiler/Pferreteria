<?php


session_start();
require_once 'app/controller/user_controller.php';
require_once 'config/conexion.php';
require_once 'app/model/userModel.php';

$user_control = new user_controller();
$userModel = new userModel();


