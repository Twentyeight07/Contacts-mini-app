<br>
<div>
  <!-- Con el input Hidden le envio el valor de op a la URL automáticamente -->
    <input type="hidden" name="op" value="consultas">
    <label for="email">Email: </label>
    <input type="email" id="email" class="cambio" name="email_txt" placeholder="Email a buscar" title="Email" required>
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn" value="Buscar">
<?php
//Con este if me aseguro de que el usuario no pueda mandar el formulario vacío
if($_GET["email_txt"]!=null){
  $email = $_GET["email_txt"];
  $consulta = "SELECT * FROM contactos WHERE email LIKE '%$email%'";
  include("tabla-resultados.php");
}
?>