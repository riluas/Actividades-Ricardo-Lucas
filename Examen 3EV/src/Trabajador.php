<?php
/**
 *
 */
class Trabajador extends Conexion
{
private $nombre;
private $apellidos;
private $precio_hora;
private $horas;

/*Inicio comrpobar registro*/
  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])||!isset($post["horas"])){
       $error="";
     }elseif($post["nombre"]==""){
       $error="Debes rellenar este campo";
     }elseif($post["apellidos"]==""){
       $error="No has introducido el apellido";
     }elseif($post["precio_hora"]==""){
       $error="No has introducido el precio_hora";
     }elseif($post["horas"]==""){
       $error="No has introducido las horas";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->precio_hora=$post["precio_hora"];
       $this->horas=$post["horas"];
       echo "string";
     }
     return $error;
   }
/*Fin comrpobar registro*/

  public function insertarTrabajador()
  {
    $consulta="INSERT INTO trabajador (nombre, apellidos, precio_hora)
    VALUES ('$this->nombre', '$this->apellidos', $this->precio_hora)";
     $this->conexion->query($consulta);
     echo $consulta;

  }

  public function ultimoRegistro()
      {
        $consulta="SELECT * FROM trabajador ORDER BY id DESC LIMIT 1";
        $resultado=$this->conexion->query($consulta);
        foreach($resultado as $value){
          $idTrabajador=$value["id"];
        }
        return $idTrabajador;

      }

  public function insertarTrabajadorPro($idTrabajador,$idProyecto)
  {
    $consulta="INSERT INTO trabajador_proyecto (id_trabajador,id_proyecto,horas)
    VALUES ($idTrabajador,$idProyecto,$this->horas)";
     $this->conexion->query($consulta);
     echo $consulta;

  }

}

?>
