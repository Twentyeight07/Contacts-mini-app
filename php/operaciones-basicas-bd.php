<?php
$conexion = mysqli_connect("localhost", "root", "") or die("No se pudo conectar con el servidor de la Base de datos");
echo "Conexión exitosa. <br><br>";

mysqli_select_db($conexion, "mis_contactos") or die("No se pudo seleccionar la Base de datos");
echo "Base de datos seleccionada: <b>'Mis contactos'</b>. <br><br>";

echo "<h1>Las cuatro operaciones básicas a una BD</h1>";
echo "<h2>1) Inserción de datos</h2>";
//INSERT INTO nombre_tabla(campos_tabla) VALUES(valores_campos)
$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('eduardo.freites1999@gmail.com','Eduardo','M','1999-02-03','4120909729','Venezuela','eduardo.png')";

// $ejecutar_consulta = $conexion->query($consulta) or die("<b>Ocurrio un error en la insersión de datos</b>");
// echo "Se han insertado los datos correctamente :) <br><br>";

echo "<h2>2) Eliminación de datos</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor
$consulta = "DELETE FROM contactos WHERE email = 'eduardos' ";

// $ejecutar_consulta = $conexion->query($consulta) or die("No se pudo eliminar el registro");
// echo "Datos eliminados :) <br><br>"

echo "<h2>3) Modificación de datos</h2>";
//UPDATE nombre_tabla SET nombre_campo = valor, otro_campo = otro_valor WHERE campo = valor
$consulta = "UPDATE contactos SET email = 'efreites4@gmail.com', nombre = 'José', imagen = 'jose.png' WHERE email = 'eduardo.freites1999@gmail.com' ";

// $ejecutar_consulta = $conexion->query($consulta);
// echo "Se modificaron los datos :)";

echo "<h2>4) Consulta de datos</h2>";
//SELECT * FROM nombre_tabla WHERE campo = valor
$consulta = "SELECT * FROM contactos";

$ejecutar_consulta = $conexion->query($consulta);

while($registro=mysqli_fetch_array($ejecutar_consulta)){
  echo $registro["email"]."---";
  echo $registro["nombre"]."---";
  echo $registro["sexo"]."---";
  echo $registro["nacimiento"]."---";
  echo $registro["telefono"]."---";
  echo $registro["pais"]."---";
  echo $registro["imagen"]."<br><br>";
};

mysqli_close($conexion);
echo "Conexión cerrada."
?>