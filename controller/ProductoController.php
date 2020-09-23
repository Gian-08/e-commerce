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

        public function GuardarProductoModel($nombre,$precio,$categoria,$description,$imagenUrl,$imagen1Url,$imagen2Url,$imagen3Url)
        {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->categoria = $categoria;
            $this->descripcion = $description;
            $this->imagen = $imagenUrl;
            $this->imagen1 = $imagen1Url;
            $this->imagen2 = $imagen2Url;
            $this->imagen3 = $imagen3Url;
            $this->InsertarProducto();
            $this->RedireccionarVistaProducto();

        }
        public function ActualizarProductoModel($IdProducto,$nombre,$precio,$categoria,$description,$imagenUrl,$imagen1Url,$imagen2Url,$imagen3Url)
        {
            $this->IdProducto = $IdProducto;
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->categoria = $categoria;
            $this->descripcion = $description;
            $this->imagen = $imagenUrl;
            $this->imagen1 = $imagen1Url;
            $this->imagen2 = $imagen2Url;
            $this->imagen3 = $imagen3Url;
            $this->ActualizarProductoActual();
            $this->RedireccionarVistaProducto();
        }

        public function ListaProductos()
        {
            $objProducto = $this->BuscarProductos();
            require '../tienda/coleccion.php';
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

        $imagen1 = $_FILES['imagen1']['name'];
        $imagen1Temporal = $_FILES['imagen1']['tmp_name'];
        $imagen1Url="../imagenes/producto/" . $imagen1;
        copy($imagen1Temporal,$imagen1Url);

        $imagen2 = $_FILES['imagen2']['name'];
        $imagen2Temporal = $_FILES['imagen2']['tmp_name'];
        $imagen2Url="../imagenes/producto/" . $imagen2;
        copy($imagen2Temporal,$imagen2Url);

        $imagen3 = $_FILES['imagen3']['name'];
        $imagen3Temporal = $_FILES['imagen3']['tmp_name'];
        $imagen3Url="../imagenes/producto/" . $imagen3;
        copy($imagen3Temporal,$imagen3Url);

        $instanciaProducto->GuardarProductoModel(
            $_POST['nombre'],
            $_POST['precio'],
            $_POST['categoria'],
            $_POST['descripcion'],
            $imagenUrl,
            $imagen1Url,
            $imagen2Url,
            $imagen3Url,
        );
    }

    //Eliminar
    if(isset($_GET['action']) && $_GET['action']=='eliminar'){
        $instanciaProducto = new ProductoController();
        $eliminarImagen =  $_GET['imagen'];
        $eliminarImagen1 =  $_GET['imagen1'];
        $eliminarImagen2 =  $_GET['imagen2'];
        $eliminarImagen3 =  $_GET['imagen3'];
        
        //echo $eliminarImagen;
        unlink($eliminarImagen);
        unlink($eliminarImagen1);
        unlink($eliminarImagen2);
        unlink($eliminarImagen3);
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

        $imagen1UrlActual = $_POST['imagen1UrlActual'];

        $imagen1 = $_FILES['imagen1']['name'];
        $imagen1Temporal = $_FILES['imagen1']['tmp_name'];
        $imagen1Url="../imagenes/producto/" . $imagen1;

        if(empty($imagen1Temporal)){
            $imagen1Url = $imagen1UrlActual;
        } else {
            unlink($imagen1UrlActual);
            copy($imagen1Temporal,$imagen1Url);
        }

        $imagen2UrlActual = $_POST['imagen2UrlActual'];

        $imagen2 = $_FILES['imagen2']['name'];
        $imagen2Temporal = $_FILES['imagen2']['tmp_name'];
        $image2nUrl="../imagenes/producto/" . $imagen2;

        if(empty($imagen2Temporal)){
            $imagen2Url = $imagen2UrlActual;
        } else {
            unlink($imagen2UrlActual);
            copy($imagen2Temporal,$imagen2Url);
        }

        $imagen3UrlActual = $_POST['imagenUrlActual'];

        $imagen3 = $_FILES['imagen3']['name'];
        $imagen3Temporal = $_FILES['imagen3']['tmp_name'];
        $imagen3Url="../imagenes/producto/" . $imagen3;

        if(empty($imagen3Temporal)){
            $imagen3Url = $imagen3UrlActual;
        } else {
            unlink($imagen3UrlActual);
            copy($imagen3Temporal,$imagen3Url);
        }

        $instanciaProducto->ActualizarProductoModel(
            $_POST['IdProducto'],
            $_POST['nombre'],
            $_POST['precio'],
            $_POST['categoria'],
            $_POST['descripcion'],
            $imagenUrl,
            $imagen1Url,
            $imagen2Url,
            $imagen3Url,
        );
    }

?>