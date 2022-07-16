<?php
/*
Pasos para conectarme a una Base de Datos MySQL con PHP:

1-  Conectar a la BD: mysqli_connect

    mysqli_connect necesita 3 datos: 
      a) Servidor de BD 
      b) Usuario de BD
      c) Password del usuario de la BD
*/

$conexion = mysqli_connect("localhost", "root", "") or die("No se pudo conectar con servidor de BD");
echo "Estoy conectado a MySQL <br><br>";


//2- Seleccionar la BD con la que vamos a trabajar

mysqli_select_db($conexion, "mis_contactos") or die("No se pudo seleccionar la BD 'mis_contactos' ");
echo "Base de datos seleccionada: 'mis_contactos' <br><br>";

//3-  Crear una consulta SQL
$consulta = "SELECT * FROM pais";

//4- Ejecutar la consulta SQL
//mysqli_query() necesita dos parámetros: 
      //a) la consulta
      //b) la conexión a la BD

$ejecuar_consulta = $conexion->query($consulta) or die("No se pudo ejecutar la consulta en la BD");
echo "se ejecutó la consulta SQL <br><br>";

//5- Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la función mysqli_fetch_array
while($registro = mysqli_fetch_array($ejecuar_consulta)){
echo $registro["id_pais"]." - ".$registro["pais"]."<br>";
};

//6- Cerrar conexión a la base de datos
mysqli_close($conexion) or die("Ocurrió un error al cerrar la conexión a la base de datos");
echo "<br> Conexión cerrada";


?>