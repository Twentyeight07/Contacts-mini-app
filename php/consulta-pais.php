<br>
<div>
  <label for="pais">País: </label>
  <input type="hidden" name="op" value="consultas">
  <select name="pais_slc" class="cambio" id="pais" required>
    <option value="">Elige un país</option>
    <?php include("select-pais.php") ?>
  </select>
</div>
<input type="submit" id="enviar-buscar" name="enviar_btn" class="cambio" value="Buscar">
<?php
if($_GET["pais_slc"]!=null){
  $pais = $_GET["pais_slc"];
  $consulta = "SELECT * FROM contactos WHERE pais ='$pais'";
  include("tabla-resultados.php");
}
?>