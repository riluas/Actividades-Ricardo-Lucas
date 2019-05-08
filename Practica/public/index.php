<?php
require "./../src/conexion.php";
require "./../src/evento.php";
$j=new Evento();
  $j->conectar();
  $lista=$j->listarEvento();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
          <h3>Registro</h3>
          <br><br>
          <script type="text/javascript" src="js/comprobar.js"></script>
          <div class="reg">
            <form class="" action="registro.php" method="post" onsubmit="return comprobar();">
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
              Provincia:
              <p><input type="text" name="provincia" value="" id="provincia" ></p>
                <div id="provinciaOculto"  class="estilo" style='display:none;'>Debes rellenar este campo</div>
              <br>

              <select class="" name="idevento">
                <?php
                  foreach ($lista as $listarEvent) {
                            $id=$listarEvent["id"];
                            $descripcion=$listarEvent["descripcion"];
                            echo "<option value='$id'>$descripcion</option>";
                  }
                ?>
                </select>
                <br>
              <input type="submit" name="" value="Enviar" onclick="return comp()"></input>
    </form>
  </body>
</html>
