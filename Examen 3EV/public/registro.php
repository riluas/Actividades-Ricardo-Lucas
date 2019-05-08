<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";

$a=new Trabajador();
var_dump($_POST);
$error=$a->comprobarCampos($_POST);
if($error){
  echo $error;
  echo "Error";
}else{
  $a->conectar();
  $a->insertarTrabajador();
  $idTrabajador=$a->ultimoRegistro();
  $a->insertarTrabajadorPro($idTrabajador,$_POST["idPro"]);
  echo "<br>";
  echo "<br>";
  echo "<h1>";
  echo "Correcto";
  echo "</h1>";
}


?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
