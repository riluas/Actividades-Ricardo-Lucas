<?php
require "./../src/Conexion.php";
require "./../src/Proyecto.php";
$j=new Proyecto();
  $j->conectar();
  $lista=$j->listarProyecto();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
          <h1>Registro</h1>
          <br>
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
              Precio_hora:
                <p><input type="text" name="precio_hora" value="" id="precio_hora" ></p>
                  <div id="prehoOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
                  <div id="numOculto1"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
                  <br><br>
              Horas:
                  <p><input type="text" name="horas" value="" id="horas" ></p>
                    <div id="horasOculto" class="estilo" style='display:none;'>Debes rellenar este campo</div>
                    <div id="numOculto2"  class="estilo" style='display:none;'>Este campo debe ser un Numero</div>
              <br><br>

              <select class="" name="idPro">
              <?php
                               foreach ($lista as $listarPro) {
                                         $id=$listarPro["id"];
                                         $descripcion=$listarPro["nombre"];
                                         echo "<option value='$id'>$descripcion</option>";

                               }
                             ?>
                             </select>

                <br><br>
              <input type="submit" name="" value="Enviar" onclick="return comp()"></input>
    </form>
  </body>
</html>
