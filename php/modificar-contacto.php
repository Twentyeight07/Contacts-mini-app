<?php
//Asigno a variables php los valores que vienen del formulario 
//Como el campo email está deshabilitado en el form php no lo reconoce por eso tengo que guardar su valor en un campo oculto
$email = $_POST["email_hdn"];
$nombre = $_POST["name_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"] ;
$telefono = $_POST["phone_txt"];
$pais = $_POST["pais_slc"];

include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta= $conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;

if($num_regs==1){
  //Si la foto viene vacía asignamos el valor del input hidden, si no subo la nueva foto y la reemplazo
  if(empty($_FILES["img_fls"]["tmp_name"])){
      $imagen=$_POST["img_hdn"];
  }else{
    //Se ejecuta la funcion para subir imagenes
    include("php/funciones.php");
    $tipo = $_FILES["img_fls"]["type"];
    $archivo = $_FILES["img_fls"]["tmp_name"];
    $imagen = subir_imagen($tipo, $archivo, $email);
  };
  //actualizo los datos en la BD
  $consulta = "UPDATE contactos SET nombre='$nombre',sexo='$sexo',nacimiento='$nacimiento',telefono='$telefono',pais='$pais',imagen='$imagen' WHERE email='$email'";
  $ejecutar_consulta= $conexion->query($consulta);
  if ($ejecutar_consulta) {
    $mensaje="Se realizaron exitosamente los cambios en el contacto con el email <b>$email</b> :)";
  }else{
    $mensaje="ocurrió un error al intentar realizar los cambios en el contacto con el email <b>$email</b> :/";
  }
}else {
  $mensaje = "No se pudieron hacer los cambios en el contacto con el email <b>$email</b> :(";
}

$conexion->close();
header("Location:../index.php?op=cambios&mensaje=$mensaje")
?>