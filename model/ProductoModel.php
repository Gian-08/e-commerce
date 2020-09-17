<?php

    require '../BD/conexionBD.php';

    class ProductoModel {
        protected $IdProdcuto;
        protected $nombre;
        protected $precio;
        protected $categoria;
        protected $descripcion;
        protected $imagen;


        protected function InsertarProducto(){
            $instanciaConexion = new Conexion();
            $sql = "INSERT INTO productos(nombre,precio,categoria,descripcion,imagen) VALUES(?,?,?,?,?)";
            $insertar = $instanciaConexion->db->prepare($sql);
            $insertar->bindParam(1,$this->nombre);
            $insertar->bindParam(2,$this->precio);
            $insertar->bindParam(3,$this->categoria);
            $insertar->bindParam(4,$this->descripcion);
            $insertar->bindParam(5,$this->imagen);
            $insertar->execute();
        }

        protected function BuscarProductos(){
            $instanciaConexion = new Conexion();
            $sql = "SELECT * FROM productos";
            $mostrar = $instanciaConexion->db->prepare($sql);
            $mostrar->execute();
            $objProducto = $mostrar->fetchAll(PDO::FETCH_OBJ);
            return $objProducto;
        }

        protected function EliminarProducto(){
            $instanciaConexion = new Conexion();
            $sql = "DELETE FROM productos WHERE IdProducto='$this->IdProdcuto'";
            $eliminar = $instanciaConexion->db->prepare($sql);
            $eliminar->execute();
        }

        protected function BuscarProductoPorId(){
            $instanciaConexion = new Conexion();
            $sql = "SELECT * FROM productos WHERE IdProducto='$this->IdProducto'";
            $mostrar = $instanciaConexion->db->prepare($sql);
            $mostrar->execute();
            $objProductoActual = $mostrar->FetchAll(PDO::FETCH_OBJ);
            return $objProductoActual;
        }

        protected function ActualizarProductoActual(){
            $instanciaConexion = new Conexion();
            $sql = "UPDATE productos SET nombre='$this->nombre', precio='$this->precio', categoria='$this->categoria', descripcion='$this->descripcion', imagen='$this->imagen' WHERE IdProducto='$this->IdProducto'";
            $actualizar = $instanciaConexion->db->prepare($sql);
            $actualizar->execute();
        }


    }

?>