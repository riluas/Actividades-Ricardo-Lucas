<?php
session_start();
if(!isset($_SESSION["usuario"])){
  header("Location: http://localhost/Programacion/Proyecto%2010/public/login.php");
}
?>
