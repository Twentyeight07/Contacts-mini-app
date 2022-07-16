<?php
//asigno a variables de PHP los valores que vienen del formulario

$email = $_POST["email_txt"];
$nombre = $_POST["name_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"] ;
$telefono = $_POST["phone_txt"];
$pais = $_POST["pais_slc"];
//Dependiendo el sexo colocamos una imagen predeterminada
$imagen_generica = ($sexo == "M")?"hombre.png":"mujer.png";

//Verificamos que no exista previamente el email del usuario en la BD
include("conexion.php");
$consulta = "SELECT * FROM contactos WHERE email = '$email' ";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//Si $num_regs es igual a 0 significa que el usuario no existe, insertamos los datos en la tabla, sino mandamos un mensaje que diga "usuario existente"

if($num_regs == 0){
  //Se ejecuta la función para subir la imagen
    include("funciones.php");
    $tipo = $_FILES["img_fls"]["type"];
    $archivo = $_FILES["img_fls"]["tmp_name"];
    $se_subio_img = subir_imagen($tipo,$archivo,$email);

    //Si la foto en el formulario viene vacía, le asigno el valor de la imgane genérica, sino entonces asigno el nombre de la foto que se subió
    $imagen = empty($archivo)?$imagen_generica:$se_subio_img;

    $consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";
    $ejecutar_consulta = $conexion->query($consulta);

    if($ejecutar_consulta){
      $mensaje = "Se ha dado de alta el usuario con el email <b>$email</b> :)";
    } else {
      $mensaje = "No se pudo dar de alta al contacto con el email <b>$email</b> :(";
    }

}else{
  $mensaje = "no se pudo dar de alta al contacto con el email <b>$email</b> porque ya existe :/";
};

$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");
?>