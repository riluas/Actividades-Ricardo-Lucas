<?php
require "./../src/usuario.php";
  $j=new Usuario();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarUsuario();

      }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/algo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="index.php">Home</a>
      <a href="registro.php">Registro</a>
      <a href="listadoUsuarios.php">Usuarios</a>
    </div>


    <!-- Inputs de registro-->
    <br>
      <h3>Registro</h3>
      <br><br>
      <script type="text/javascript" src="js/comprobar.js"></script>
      <div class="reg">
        <form class="" action="listadoUsuarios.php" method="post" onsubmit="return comprobar();">
          Nombre:
            <p><input type="text" name="nombre" value="" id="nombre" ></p>
              <div id="nombreOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          <br><br>
          Apellidos:
            <p><input type="text" name="apellidos" value="" id="apellidos" ></p>
              <div id="apellidoOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
          <br><br>
          Edad:
            <p><input type="text" name="edad" value="" id="edad" ></p>
              <div id="edadOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
              <div id="numOculto1"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
          <br><br>
          Curso:
          <p><input type="text" name="curso" value="" id="curso" ></p>
            <div id="cursoOculto"  class="estilo" style='display:none;'>Debes rellenar este campo</div>
            <div id="numOculto2"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
          <br>
          <input type="submit" name="" value="Enviar" onclick="return comp()"></input>
        </form>
      </div>
  </body>
</html>
