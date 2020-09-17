<?php
    class Conexion
    {
          public $db;
            //Datos que me permiten ingresar la informacion a mi instancia PDO
          public function __construct()
          {
            $host = "localhost";
            $dbname = "neonledstore";
            $username = "root";
            $password = "";

            try {
                $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $this->db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error:".$e->getMessage();
            }
          }
    }
?>