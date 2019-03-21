<?php
/**
 * Jugador
 */
class insEquipo
{
  private $conexion=null;
  private $nombre;
  private $ciudad;
  private $conferencia;
  private $division;
  function __construct()
  {
  }

  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["Nombre"])||!isset($post["Ciudad"])||!isset($post["Conferencia"])||!isset($post["Division"])){
      $error="";
    }elseif($post["Nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["Ciudad"]==""){
      $error="No has introducido la Ciudad";
    }elseif($post["Conferencia"]==""){
      $error="No has introducido la Conferencia";
    }elseif($post["Division"]==""){
      $error="No has introducido la Division";
      }else{
      $error=false;
      $this->nombre=$post["Nombre"];
      $this->ciudad=$post["Ciudad"];
      $this->conferencia=$post["Conferencia"];
      $this->division=$post["Division"];
    }
    return $error;
  }

  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarJugador(){

    $consulta="INSERT INTO equipos (Nombre, Ciudad, Conferencia, Division)
                VALUES ('$this->nombre', '$this->ciudad','$this->conferencia', '$this->division')";
    $this->conexion->query($consulta);
  }
}



 ?>
