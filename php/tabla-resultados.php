<?php
if(empty($_GET["pais_slc"])){
  include("conexion.php");
}
//Incluímos el archivo de la conexión y el de funciones
include("funciones.php");
//La consulta se ejecuta aquí ya que este archivo de resultados fue incluído en el archivo donde hacemos la misma (consulta)
//De esta forma ejecutamos la consulta solo 1 vez ya que en todos los archivos vamos a incluir este de resultados
$ejecutar_consulta= $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==0){
echo "<br /><br /><span class='mensajes'>No se encontraron registros con esta búsqueda :(</span><br /><br />";
}else{
?>
    <br><br>
    <table>
      <thead>
            <tr>
                  <th>Email</th>
                  <th>Nombre</th>
                  <th>Sexo</th>
                  <th>Nacimiento</th>
                  <th>Teléfono</th>
                  <th>País</th>
                  <th>Imagen</th>
            </tr>
      </thead>
      <tbody>
        <?php
        while ($registro=$ejecutar_consulta->fetch_assoc()) {
          ?>
              <tr>
                    <td><?php echo $registro["email"] ?></td>
                    <td><?php echo $registro["nombre"] ?></td>
                    <td><?php echo ($registro["sexo"]=="F")?"Mujer":"Hombre" ?></td>
                    <td><?php echo $registro["nacimiento"] ?></td>
                    <td><?php echo $registro["telefono"] ?></td>
                    <td><?php echo $registro["pais"] ?></td>
                    <td><img class="table-img" src="img/fotos/<?php echo $registro["imagen"] ?>"></td>
              </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
<?php
};
$conexion->close();
?>