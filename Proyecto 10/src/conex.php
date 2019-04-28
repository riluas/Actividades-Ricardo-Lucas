<?php
/**
 * DB
 */
class Conex
{
  private $server="localhost";
  private $db="juegosbd";
  private $user="root";
  private $pass="";
  public $conexion=null;
  function __construct()
  {
  }

  public function config($server,$db,$user,$pass){
    $this->server=$server;
    $this->db=$db;
    $this->user=$user;
    $this->pass=$pass;
  }
  public function conectar(){
    $this->conexion = new mysqli($this->server, $this->user, $this->pass, $this->db);
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
    /**
     * Get the value of DB
     *
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Set the value of DB
     *
     * @param mixed server
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of Pass
     *
     * @param mixed pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
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

}
 ?>
