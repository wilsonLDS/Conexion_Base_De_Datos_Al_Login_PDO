<?php
session_start();

if(isset($_SESSION['correo_user'])){
  echo'
      <p>
        Bienvenid@: '. $_SESSION['correo_user'] .'
      </p>
      ';
}

?>