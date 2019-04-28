<?php
/* inicio sesion */
session_start();
/* conexion */
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
      <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/log.css">
  </head>
  <body>

    <div id="log">
    <!-- caja inicio sesion -->
    <p id="us">Usuario</p>
    <form class="" action="login.php" method="post">
      <select name="user">
      <?php
        foreach ($lista as $usuario) {
          echo "<option value=$usuario[id]>".$usuario['nombre']."</option>";
        }
          $_SESSION['usuario'] = $_POST['user'];
      ?>
      </select>
    <input type="submit" value="ENVIAR">
    </form>
    <!-- fin caja inicio sesion -->

    <?php
    if(isset($_SESSION["usuario"])){
      header("Location: http://localhost/Programacion/Proyecto%2010/public/index.php");
    }


    ?>
</div>

    <div>
      <div id="particles-js"></div>
        <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
      <script src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
      <script  src="js/backLogin.js"></script>
  </body>
</html>
