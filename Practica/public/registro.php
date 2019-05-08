<?php
require "../src/conexion.php";
require "../src/asistente.php";

$a=new Asistente();
var_dump($_POST);
$error=$a->comprobarCampos($_POST);
if($error){
  echo $error;
  echo "Error";
}else{
  $a->conectar();
  $a->insertarUsuario();
  $idAsistente=$a->ultimoRegistro();
  $a->insertarEventoAsist($_POST["idevento"],$idAsistente);
  echo "<br>";
  echo "Correcto";
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
