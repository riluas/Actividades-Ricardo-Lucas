<?php
/**
 *
 */
class Asistente extends Conexion
{
private $nombre;
private $apellidos;
private $edad;
private $provincia;

/*Inicio comrpobar registro*/
  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["edad"])||!isset($post["provincia"])){
       $error="";
     }elseif($post["nombre"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["apellidos"]==""){
       $error="No has introducido el apellido";
     }elseif($post["edad"]==""){
       $error="No has introducido la edad";
     }elseif($post["provincia"]==""){
       $error="No has introducido la provincia";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->edad=$post["edad"];
       $this->provincia=$post["provincia"];
       echo "string";
     }
     return $error;
   }
/*Fin comrpobar registro*/

  public function insertarUsuario()
  {
    $consulta="INSERT INTO asistente (nombre, apellidos, edad, provincia)
    VALUES ('$this->nombre', '$this->apellidos', $this->edad, '$this->provincia')";
     $this->conexion->query($consulta);
     echo $consulta;

  }

  public function ultimoRegistro()
      {
        $consulta="SELECT * FROM asistente ORDER BY id DESC LIMIT 1";
        $resultado=$this->conexion->query($consulta);
        foreach($resultado as $value){
          $idAsistente=$value["id"];
        }
        return $idAsistente;

      }

  public function insertarEventoAsist($idevento,$idAsistente)
  {
    $consulta="INSERT INTO asistente_evento (id_asistente,id_evento)
    VALUES ($idAsistente,$idevento)";
     $this->conexion->query($consulta);
     echo $consulta;

  }

}

?>
