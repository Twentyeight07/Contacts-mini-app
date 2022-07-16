<form id="baja-contacto" name="baja_frm" action="php/eliminar-contacto.php" method="post" >
  <fieldset class="field">
    <legend>Baja de contacto</legend>
    <div>
      <label for="email">Email: </label>
      <select name="email_slc" class="cambio" id="email" required>
            <option value="">Selecciona un contacto</option>
            <?php include("select-email.php"); ?>
      </select>
    </div>
    <div>
      <input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="Eliminar">
    </div>
    <?php include("php/mensajes.php"); ?>
  </fieldset>
</form>