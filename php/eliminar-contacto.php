<?php
  $email=$_POST["email_slc"];
  include("conexion.php");
  $consulta="DELETE FROM contactos WHERE email='$email' ";

  $ejecutar_consulta = $conexion->query($consulta);

if($ejecutar_consulta){
  $mensaje = "Se ha eliminado al contacto con el email <b>$email</b> :)";
} else {
  $mensaje = "No se pudo eliminar al contacto con el email <b>$email</b> :(";
};

$conexion->close();
header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>

