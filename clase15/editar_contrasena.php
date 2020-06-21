<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
require_once("libs/usuarios.lib.php");
if($_POST)
  {
  $valido= validar($_SESSION['usuario'],md5($_POST['actual']), $conn);
  if ($valido){
    actualizar($conn,md5($_POST['nueva']),$_SESSION['id']);
    header('Location:index.php?tipo=exito&mensaje=contraseña cambiada');
  }else{
    header('Location:index.php?tipo=error&mensaje=contraseña invalida');
}
  }
 ?>
