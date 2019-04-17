<?php
/**
 *
 */
class Juego extends Conex
{

  public $conexion=null;
  private $id;
  private $nombre;


  function __construct()
  {
  }

  public function listarUsuarios(){
      $resultado=$this->conexion->query("SELECT * FROM juego");
      return $resultado;
    }



    /**
     * Get the value of Conexion
     *
     * @return mixed
     */
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * Set the value of Conexion
     *
     * @param mixed conexion
     *
     * @return self
     */
    public function setConexion($conexion)
    {
        $this->conexion = $conexion;

        return $this;
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

}

 ?>
