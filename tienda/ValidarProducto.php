<?php

require_once("autoload.php");

class Productos extends Conexion{

    private $nombre;
    private $precio;
    private $categoria;
    private $descripcion;
    private $imagen;
    private $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public function insertarProducto(string $nombre, double $precio, string $categoria, string $descripcion, string $imagen)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;

    }
}


    
?>