<?php
/**
 *
 */
 class Conexion
 {
   private $server="localhost";
   private $db="proyectos";
   private $user="root";
   private $pass="";
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
 }

 ?>
