<?php
require "./../src/Jugador.php";

  $j=new Jugador();
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
    <h2>Nuevo Jugador</h2>
    <form class="formNBA" action="nuevoJugador.php" method="post">
      <div class="grupoFormItem">
        <label for="codigo"></label>
        <span class="formLabel">codigo </span>
        <input type="text" name="codigo" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Nombre"></label>
        <span class="formLabel">nombre </span>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Peso"></label>
        <span class="formLabel">peso </span>
        <input type="text" name="Peso" value="">
      </div>
      <input type="submit" name="" value="insertar">
    </form>
  </body>
</html>
