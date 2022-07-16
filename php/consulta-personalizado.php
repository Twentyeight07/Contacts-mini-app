<br>
<div>
  <!-- Con el input Hidden le envio el valor de op a la URL automáticamente -->
    <input type="hidden" name="op" value="consultas">
    <label for="buscador">Búsqueda: </label>
    <input type="search" id="buscador" class="cambio" name="q" placeholder="Escribe tu búsqueda" title="Búsqueda" required>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">
<?php
//Con este if me aseguro de que el usuario no pueda mandar el formulario vacío
if($_GET["q"]!=null){
  $q = $_GET["q"];
  $consulta = "SELECT * FROM contactos WHERE MATCH(email, nombre, sexo, telefono, pais) AGAINST('$q' IN BOOLEAN MODE)";
  include("tabla-resultados.php");
}
?>