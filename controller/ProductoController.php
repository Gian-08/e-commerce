<?php

    require '../model/ProductoModel.php';
    require '../controller/StarterController.php';

    $instanciaStarter = new StarterController();
    if(empty($_SESSION['email'])){
        $instanciaStarter->redirect();
    }

    class ProductoController extends ProductoModel {

        public function ProductoView()
        {
            require '../view/producto/producto.php';
        }

        public function GuardarProductoModel($nombre,$precio,$categoria,$description,$imagenUrl)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->categoria = $categoria;
            $this->descripcion = $description;
            $this->imagen = $imagenUrl;
            $this->InsertarProducto();
            $this->RedireccionarVistaProducto();

        }
        public function ActualizarProductoModel($IdProducto,$nombre,$precio,$categoria,$description,$imagenUrl)
        {
            $this->IdProducto = $IdProducto;
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->categoria = $categoria;
            $this->descripcion = $description;
            $this->imagen = $imagenUrl;
            $this->ActualizarProductoActual();
            $this->RedireccionarVistaProducto();
        }

        public function ListaProductos()
        {
            $objProducto = $this->BuscarProductos();
            require '../view/producto/vistaProducto.php';
        }

        public function MostrarProductoActual($IdProducto)
        {
            $this->IdProducto = $IdProducto;
            $objProductoActual =  $this->BuscarProductoPorId();
            require '../view/producto/actualizarProducto.php';

        }
        public function EliminarProductoActual($IdProducto)
        {
            $this->IdProdcuto = $IdProducto;
            $this->EliminarProducto();
            $this->RedireccionarVistaProducto();
        }

        public function RedireccionarVistaProducto(){
            header("Location: ProductoController.php?action=vista");
        }
    }

    if(isset($_GET['action']) && $_GET['action']=='vista'){
        $instanciaProducto = new ProductoController();
        $instanciaProducto->ListaProductos();
    }

    //Insertar
    if(isset($_GET['action']) && $_GET['action']=='insertar'){
        $instanciaProducto = new ProductoController();
        $instanciaProducto->ProductoView();
    }

    if(isset($_POST['action']) && $_POST['action']=='insertar'){
        $instanciaProducto = new ProductoController();

        $imagen = $_FILES['imagen']['name'];
        $imagenTemporal = $_FILES['imagen']['tmp_name'];
        $imagenUrl="../imagenes/producto/" . $imagen;
        copy($imagenTemporal,$imagenUrl);

        $instanciaProducto->GuardarProductoModel(
            $_POST['nombre'],
            $_POST['precio'],
            $_POST['categoria'],
            $_POST['descripcion'],
            $imagenUrl,
        );
    }

    //Eliminar
    if(isset($_GET['action']) && $_GET['action']=='eliminar'){
        $instanciaProducto = new ProductoController();
        $eliminarImagen =  $_GET['imagen'];
        
        //echo $eliminarImagen;
        unlink($eliminarImagen);
        $instanciaProducto->EliminarProductoActual($_GET['IdProducto']);
    }


    //Actualizar
    if(isset($_GET['action']) && $_GET['action']=='actualizar'){
        $instanciaProducto = new ProductoController();
        $instanciaProducto->MostrarProductoActual($_GET['IdProducto']);
    }

    if(isset($_POST['action']) && $_POST['action']=='actualizar'){
        $instanciaProducto = new ProductoController();

        $imagenUrlActual = $_POST['imagenUrlActual'];

        $imagen = $_FILES['imagen']['name'];
        $imagenTemporal = $_FILES['imagen']['tmp_name'];
        $imagenUrl="../imagenes/producto/" . $imagen;

        if(empty($imagenTemporal)){
            $imagenUrl = $imagenUrlActual;
        } else {
            unlink($imagenUrlActual);
            copy($imagenTemporal,$imagenUrl);
        }

        $instanciaProducto->ActualizarProductoModel(
            $_POST['IdProducto'],
            $_POST['nombre'],
            $_POST['precio'],
            $_POST['categoria'],
            $_POST['descripcion'],
            $imagenUrl,
        );
    }

?>