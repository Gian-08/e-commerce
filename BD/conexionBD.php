<?php
    class Conexion
    {
        public $db;
    
        public function conectar()
        {
            //Datos que me permiten ingresar la informacion a mi instancia PDO
            $host = "localhost";
            $dbname = "neonledstore";
            $username = "root";
            $password = "";
            try {
                $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            } catch (PDOException $th) {
                echo "Error: " . $th->getMessage();
            }
            
        }
        //Funcion que me permite cerrar una conexion cuando yo quiera =)
        public function CloseConexion()
        {
            $this->db = null;
        }

    
    }
?>