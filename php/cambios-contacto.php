<script>
  window.onload = function(){
    let lista = document.getElementById("contacto-lista")
    lista.onchange = function(){
      window.location="?op=cambios&contacto_slc="+lista.value
    }
  }
</script>
<form id="cambio-contacto" name="cambio-frm" action="php/modificar-contacto.php" method="post" enctype="multipart/form-data">
  <fieldset class="field" >
<legend>Cambio de contacto</legend>
<div>
  <label for="contacto-lista">Contacto: </label>
  <select name="contacto_slc" id="contacto-lista" class="cambio" required>
      <option value="">- Seleccione un contacto -</option>
      <?php include("select-email.php"); ?>
  </select>
</div>
<?php
    if($_GET["contacto_slc"]!=null){
      $conexion2=conectarse();
      $contacto=$_GET["contacto_slc"];
      $consulta_contacto="SELECT * FROM contactos WHERE email ='$contacto'";
      $ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
      $registro_contacto= $ejecutar_consulta_contacto->fetch_assoc();
      include("php/cambio-form.php");
    };
    include("php/mensajes.php");
?>
  </fieldset>
</form>