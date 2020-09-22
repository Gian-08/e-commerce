<?php

    require '../BD/conexionBD.php';

    class ProductoModel {
        protected $IdProdcuto;
        protected $nombre;
        protected $precio;
        protected $categoria;
        protected $descripcion;
        protected $imagen;
        protected $imagen1;
        protected $imagen2;
        protected $imagen3;


        protected function InsertarProducto(){
            $instanciaConexion = new Conexion();
            $sql = "INSERT INTO productos(nombre,precio,categoria,descripcion,imagen,imagen1,imagen2,imagen3) VALUES(?,?,?,?,?,?,?,?)";
            $insertar = $instanciaConexion->db->prepare($sql);
            $insertar->bindParam(1,$this->nombre);
            $insertar->bindParam(2,$this->precio);
            $insertar->bindParam(3,$this->categoria);
            $insertar->bindParam(4,$this->descripcion);
            $insertar->bindParam(5,$this->imagen);
            $insertar->bindParam(6,$this->imagen1);
            $insertar->bindParam(7,$this->imagen2);
            $insertar->bindParam(8,$this->imagen3);
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
            $sql = "UPDATE productos SET nombre='$this->nombre', precio='$this->precio', categoria='$this->categoria', descripcion='$this->descripcion', imagen='$this->imagen', imagen1='$this->imagen1', imagen2='$this->imagen2', imagen3='$this->imagen3' WHERE IdProducto='$this->IdProducto'";
            $actualizar = $instanciaConexion->db->prepare($sql);
            $actualizar->execute();
        }


    };

?>