<?php
$conexion = new mysqli("localhost", "root", "", "juegosbd");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT * FROM usuario where id = 2 ");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/algo.css">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>


    <!-- Menu navegacion-->
    <?php include "./assets/navSup.php"; ?>



    <br>
    <?php
    foreach ($resultado as $jugador) {
      echo "<b>Usuario Conectado: </b>";
      echo "<span style=color:red;>".$jugador['nombre']."</span>";
      echo "<br><br><b>Puntos: </b>";
      echo "<span style=color:red;>".$jugador['puntuacion']."</span>";
     }

    ?>
    <br>
    <br>
    Siguiente Fila:
      <input type="text" id="fila" value="">
    Siguiente Columna:
      <input type="text" id="columna" value="">
      <br>
      <br>
    <button class="mano" onclick="comprobar()">Comprobar movimiento</button>
      <br>
      <br>

    Movimientos realizados:
      <input class="botonrojo" type="text" disabled="disabled" id="movimientos" value="">

    Num Movs:
      <input class="botonrojo" type="text" disabled="disabled" id="nMovimientos" value="">
      <br>
      <br>

    Mensajes:
      <input class="botonrojo" type="text" disabled="disabled" id="mensajes" value="">
      <br>
      <br>

      <script type="text/javascript" src="./js/codigo.js"></script>

      <!-- Footer-->
      <?php include "./assets/footer.php"; ?>
  </body>
</html>
