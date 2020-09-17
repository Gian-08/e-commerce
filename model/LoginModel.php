<?php

require '../BD/conexionBD.php';

class LoginModel {
    protected $IdUsuario;
    protected $nombre;
    protected $email;
    protected $clave;


    protected function InsertarUsuario(){
        $instanciaConexion = new Conexion();
        $sql = "INSERT INTO usuarios(nombre,email,clave) VALUES (?,?,?)";
        $insertar = $instanciaConexion->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->email);
        $insertar->bindParam(3,$this->clave);
        $insertar->execute();
    }

    protected function BuscarUsuarioPorEmail(){
        $instanciaConexion = new Conexion();
        $sql = "SELECT * FROM usuarios WHERE email='$this->email'";
        $consulta = $instanciaConexion->db->prepare($sql);
        $consulta->execute();
        $objUsuario = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $objUsuario;
    }
}

?>