<?php
    class Conexion
    {
            //Datos que me permiten ingresar la informacion a mi instancia PDO
          private $host = "localhost";
          private $dbname = "neonledstore";
          private $username = "root";
          private $password = "";
          private $db;

          public function __construct()
          {
            $conexion = "mysql:host".$this->host. ";dbname=".$this->dbname.";charset=utf8";
            try {
                $this->db = new PDO($conexion, $this->username, $this->password);
                $this->db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                $this->db= 'Error de conexion';
                echo "Error:".$e->getMessage();
            }
          }
    }
?>