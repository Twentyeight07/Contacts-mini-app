<form id="alta-contacto" name="alta-frm" action="php/agregar-contacto.php" method="post" enctype="multipart/form-data">
  <fieldset class="field">
    <legend>Alta de Contacto</legend>
    <div>
      <label for="email">Email: </label>
      <input type="email" id="email" class="cambio" name="email_txt" placeholder="Escribe tu email..." title="Tu email" required>
    </div>
    <div>
      <label for="name">Nombre: </label>
      <input type="text" id="name" class="cambio" name="name_txt" placeholder="Escribe tu nombre..."
       title="Tu nombre" required>
    </div>
    <div>
      <label for="m">Sexo: </label>
      <input type="radio" id="m" name="sexo_rdo" title="Tu sexo" value="M" required>&nbsp;<label for="m">Masculino</label>
      &nbsp;&nbsp;&nbsp;
      <input type="radio" id="f" name="sexo_rdo" title="Tu sexo" value="F" required>&nbsp;<label for="f">Femenino</label>
    </div>
    <div>
      <label for="nacimiento">Fecha de nacimiento: </label>
      <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" required>
    </div>
    <div>
      <label for="phone">Telefono: </label>
      <input type="number" id="phone" class="cambio" name="phone_txt" placeholder="Escribe tu teléfono" title="Tu teléfono" required>
    </div>
    <div>
      <label for="pais">Pais: </label>
      <select name="pais_slc" id="pais" class="cambio" required>
        <option value="">Elige tu país</option>
        <?php include("select-pais.php"); ?>
      </select>
    </div>
    <div>
      <label for="img">Foto (Opcional): </label>
      <div class="adjuntar-archivo cambio">
        <input type="file" id="img" class="cambio" name="img_fls" title="Sube tu foto">
      </div>
    </div>
    <br>
    <div>
      <input type="submit" id="enviar-alta"  name="enviar_btn" value="Agregar">
    </div>
    <?php include("php/mensajes.php"); ?>
  </fieldset>
</form>