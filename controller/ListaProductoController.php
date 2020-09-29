<?php

    require '../model/ProductoModel.php';

    class ListaProductoController extends ProductoModel {

        public function ListaProductos()
        {
            $objProducto = $this->BuscarProductos();
            require '../tienda/coleccion.php';
        } 

    }

    if(isset($_GET['action']) && $_GET['action']=='vista'){
        $instanciaProducto = new ListaProductoController();
        $instanciaProducto->ListaProductos();
    }
?>