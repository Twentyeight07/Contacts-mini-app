<br>
<div>
      <label for="sexo">Sexo: </label>
      <input type="hidden" name="op" value="consultas">
      <input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" required>   
      <label id="lm" for="m">Masculino</label>&nbsp;&nbsp;&nbsp;
      <input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" required>   
      <label id="lf" for="f">Femenino</label>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">

<?php
$sexo=$_GET["sexo_rdo"];
if($_GET["sexo_rdo"]!=null){
  $consulta="SELECT * FROM contactos WHERE sexo= '$sexo'";
  include("tabla-resultados.php");
}
?>