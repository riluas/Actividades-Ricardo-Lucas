<?php
/**
 *
 */
class Conexion
{
public $conexion=null;

  function __construct()
  {
  }

  /*Inicio conexion*/
  public function conectar(){
    $this->conexion= new mysqli("localhost", "root", "", "juegosbd");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }

  }
  /*Fin conexion*/

}

 ?>
