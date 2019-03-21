<?php
require "./../src/insEquipo.php";

  $j=new insEquipo();
  $error=$j->comprobarCampos($_POST);

  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarJugador();
      }
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/nba.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>
    <!-- Footer-->
    <?php include "./assets/footer.php"; ?>
    <!-- ERRORES Y MENSAJES-->
    <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
    <!-- Formulario de insercion -->
    <h2>Nuevo Equipo</h2>
    <form class="formNBA" action="nuevoEquipo.php" method="post">

      <div class="grupoFormItem">
        <label for="Nombre"></label>
        <span class="formLabel">Nombre </span>
        <input type="text" name="Nombre" value="">
      </div>

      <div class="grupoFormItem">
        <label for="Ciudad"></label>
        <span class="formLabel">Ciudad </span>
        <input type="text" name="Ciudad" value="">
      </div>

      <div class="grupoFormItem">
        <label for="Conferencia"></label>
        <span class="formLabel">Conferencia </span>
        <input type="text" name="Conferencia" value="">
      </div>

      <div class="grupoFormItem">
        <label for="Division"></label>
        <span class="formLabel">Division </span>
        <input type="text" name="Division" value="">
      </div>

      <input type="submit" name="" value="insertar">
    </form>
  </body>
</html>
