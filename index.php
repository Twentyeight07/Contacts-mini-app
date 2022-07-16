<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];

switch ($op) {
  case 'alta':
    $contenido = "php/alta-contacto.php";
    $titulo = "Alta de Contacto";
    break;
  case 'baja':
    $contenido = "php/baja-contacto.php";
    $titulo = "Baja de Contacto";
    break;
  case 'cambios':
    $contenido = "php/cambios-contacto.php";
    $titulo = "Cambios a contacto";
    break;
  case 'consultas':
    $contenido = "php/consultas-contacto.php";
    $titulo = "Consultas a contacto";
    break;
  
  default:
    $contenido = "php/home.php";
    $titulo = "Mis contactos v1";
    break;
}
?>

<!DOCTYPE html>
<html lang="es" data-dark>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo; ?></title>
  <link rel="shortcut icon" href="img/favicon.png">
  <link rel="stylesheet" href="css/mis-contactos.css">
</head>
<body>
  <section id="contenido">
    <nav class="nav-menu">
    
        <a href="index.php" class="cambio">Home</a>
        <a href="?op=alta" class="cambio">Alta de Contacto</a>
        <a href="?op=baja" class="cambio">Baja de Contacto</a>
        <a href="?op=cambios" class="cambio">Cambios de Contacto</a>
        <a href="?op=consultas" class="cambio">Consultas de Contacto</a>
      </nav>
      <section id="principal">
        <?php include($contenido); ?>
      </section>
    </section>
    
<button class="dark-mode-btn">🌙</button>
<script src="js/mis-contactos.js" type="module"></script>
</body>
</html>