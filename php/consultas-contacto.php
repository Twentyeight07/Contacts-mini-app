<form id="consulta-contacto" name="consulta_frm" action="" method="get">
  <fieldset class="field">
    <legend>Consulta de Contactos</legend>
    <label for="consulta-lista">Tipo de consulta: </label>
    <select name="consulta_slc" id="consulta-lista" required>
        <option value="">- - -</option>
        <option value="todos" <?php if($_GET["consulta_slc"]=="todos"){ echo " selected"; } ?>>Todos</option>
        <option value="email" <?php if($_GET["consulta_slc"]=="email"){ echo " selected"; } ?>>Por Email</option>
        <option value="inicial" <?php if($_GET["consulta_slc"]=="inicial"){ echo " selected"; } ?>>Inicial del Nombre</option>
        <option value="sexo" <?php if($_GET["consulta_slc"]=="sexo"){ echo " selected"; } ?>>Por Sexo</option>
        <option value="pais" <?php if($_GET["consulta_slc"]=="pais"){ echo " selected"; } ?>>Por País</option>
        <option value="personalizado" <?php if($_GET["consulta_slc"]=="personalizado"){ echo " selected"; } ?> >Personalizado</option>
    </select>
    <?php 
    switch ($_GET["consulta_slc"]) {
      case "todos":
        include("php/consulta-todo.php");
        break;

      case "email":
        include("php/consulta-email.php");
        break;

      case "inicial":
        include("php/consulta-inicial.php");
        break;

      case "sexo":
        include("php/consulta-sexo.php");
        break;

      case "pais":
        include("php/consulta-pais.php");
        break;

      case "personalizado":
        include("php/consulta-personalizado.php");
        break;
      
      default:
        # code...
        break;
    }
    ?>
  </fieldset>
</form>
<script>
  window.onload = function(){
    let lista = document.getElementById("consulta-lista");

    lista.onchange = function(){window.location="?op=consultas&consulta_slc="+lista.value}
  }
</script>