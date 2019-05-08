<?php
/**
 *
 */
class Evento extends Conexion
{


  function __construct()
  {
  }


  public function listarEvento(){
    $resultado=$this->conexion->query("SELECT id, descripcion FROM evento");
    return $resultado;
  }
}

?>
