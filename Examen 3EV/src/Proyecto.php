<?php
/**
 *
 */
class Proyecto extends Conexion
{


  function __construct()
  {
  }


  public function listarProyecto(){
    $resultado=$this->conexion->query("SELECT id, nombre FROM proyecto");
    return $resultado;
  }
}

?>
