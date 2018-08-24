<?php

include '../../controllers/UserController.php';

if(isset($_POST['correo_user']) && isset($_POST['pass_user'])){

  $correo_user = $_POST['correo_user'];
  $pass_user = $_POST['pass_user'];

  if( UserController::login($correo_user, $pass_user)){
    session_start();
    $_SESSION['correo_user'] = $_POST['correo_user'];

    header('Location: http://localhost/Conexion Base de De Datos/views/admin/index.php');
  }
}
