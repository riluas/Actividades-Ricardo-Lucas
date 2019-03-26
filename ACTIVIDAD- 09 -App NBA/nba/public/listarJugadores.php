<?php
require "./../src/Jugador.php";

  $j=new Jugador();
  $j->conectar();
  $lista=$j->listarJugadores();
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
        <?php include "./assets/navSup.php"; ?>
    <table>
        <tr>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Usuario</th>
        </tr>
        <?php
          foreach ($lista as $jugadores) {
            echo "<tr>";
            echo "<td>".$jugadores['codigo']."</td>";
            echo "<td>".$jugadores['Nombre']."</td>";
            echo "<td>".$jugadores['Procedencia']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    <?php include "./assets/footer.php"; ?>
  </body>
</html>
