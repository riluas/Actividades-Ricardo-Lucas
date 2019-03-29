<?php

/**
 *
 */
class Usuario
{
  private $conexion=null;
  private $nombre;
  private $apellidos;
  private $edad;
  private $curso;

  function __construct()
  {
  }

/*Inicio comrpobar registro*/
  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["curso"])){
       $error="";
     }elseif($post["nombre"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["apellidos"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["edad"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["curso"]==""){
       $error="Debes rellenar este campo";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->edad=$post["edad"];
       $this->curso=$post["curso"];
       echo "string";
     }
     return $error;
   }
/*Fin comrpobar registro*/

/*Inicio conexion*/
public function conectar(){
  $this->conexion= new mysqli("localhost", "root", "", "juegosbd");
  if ($this->conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
  }

}
/*Fin conexion*/

public function insertarUsuario()
{
  $consulta="INSERT INTO usuario (nombre, apellidos, edad, curso) VALUES ('$this->nombre', '$this->apellidos', $this->edad, $this->curso)";
   $this->conexion->query($consulta);
   echo $consulta;
}
public function listarUsuarios(){
    $resultado=$this->conexion->query("SELECT id, nombre, apellidos, edad, curso, puntuacion FROM usuario");
    return $resultado;
  }

}



 ?>
