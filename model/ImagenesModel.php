<?php

require '../BD/conexionBD.php';

class ImagenesModel {
    protected $id;
    protected $nombre;
    protected $producto_id;


    protected function InsertarProducto(){
        $instanciaConexion = new Conexion();
        $sql = "INSERT INTO imagenes(nombre,producto_id) VALUES(?,?)";
        $insertar = $instanciaConexion->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->producto_id);
        $insertar->execute();
    }
}

?>