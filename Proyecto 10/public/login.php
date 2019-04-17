<?php
require "./../src/conex.php";
require "./../src/usuario.php";
  $j=new Usuario();
  $j->conectar();
  $lista=$j->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="./css/log.css">

    <div id="log">
    Usuario:
    <?php
    echo "<select>";
    foreach ($lista as $usuario) {
      echo "<option value=.$usuario{'id'}.>".$usuario{'nombre'}."</option>";
    }
    echo "</select>";
    ?>

    <div>
  </body>
</html>
