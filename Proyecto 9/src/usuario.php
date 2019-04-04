<?php

/**
 *
 */
class Usuario extends Conexion
{
  public $conexion=null;
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
       $error="No has introducido el apellido";
     }elseif($post["edad"]==""){
       $error="No has introducido la edad";
     }elseif($post["curso"]==""){
       $error="No has introducido el curso";
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



public function insertarUsuario()
{
  $consulta="INSERT INTO usuario (nombre, apellidos, edad, curso)
  VALUES ('$this->nombre', '$this->apellidos', $this->edad, $this->curso)";
   $this->conexion->query($consulta);
   echo $consulta;
   header("Refresh:1; url=listadoUsuarios.php");
}
public function listarUsuarios(){
    $resultado=$this->conexion->query("SELECT id, nombre, apellidos, edad, curso, puntuacion FROM usuario");
    return $resultado;
  }

}



 ?>
