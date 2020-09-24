<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLECCION</title>
    <link rel="stylesheet" href="../css/coleccion.css">
    <script src="../js/modalsIndex.js"></script>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Lista de Productos</h1>
            <div class="header-options">
                <?php if (!empty($_SESSION['email'])) : ?>
                    <a href="http://localhost/e-commerce/controller/ProductoController.php?action=insertar">Insertar Producto</a><br>
                    <a href="http://localhost/e-commerce/controller/LoginController.php?action=logout">Cerrar Sesion</a>
                <?php endif ?>
            </div>
        </header>
        <section class="cards">
            <?php foreach ($objProducto as $producto) { ?>
                
                <div class="card">
                    <input type="hidden" value="<?php $producto->IdProducto; ?>">
                    <div class="card-img">
                        <img src="<?php echo $producto->imagen; ?>" alt="" name="imagen">
                    </div>
                    <div class="card-body">
                        <div class="card-body-content">
                            
                            <span><?php echo $producto->nombre ?></span>

                            
                            <h3><?php echo $producto->categoria ?></h3>

                            
                            <strong><?php echo "s/." . $producto->precio ?>.00 soles</strong>
                        </div>
                    </div>
                    
                </div>
        
                
            <?php } ?>
        </section>
    </div>

    

    <div class="screen-modal">
        <?php foreach ($objProducto as $producto) { ?>
            <div class="modal">
                <div class="modal-img">
                    <img src="<?php echo $producto->imagen; ?>" alt="">
                </div>
                <div class="modal-head">
                    <form class="form" id="compraForm" action="../enviar.php" method="POST">

                        <input type="hidden" name="categoria" value="<?php echo $producto->categoria ?>">
                        <span><?php echo strtoupper($producto->categoria) ?></span>

                        <a href="#">
                            <input type="hidden" name="nombre" value="<?php echo $producto->nombre ?>">
                            <h3><?php echo $producto->nombre ?></h3>
                        </a>
                        <input type="hidden" name="precio" value="<?php echo "s/." . $producto->precio ?>.00 soles">
                        <strong><?php echo "s/." . $producto->precio ?>.00 soles</strong>
                        <hr>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" max="10">
                        </div>
                        <div class="form-group">
                            <button class="button" type="submit">AÑADIR AL CARRITO</button>
                        </div>
                        <hr>
                        <p><?php echo $producto->descripcion ?></p>
                    </form>
                </div>
                <div class="img-group">
                    <img src="<?php echo $producto->imagen1; ?>" alt="" width="100px" height="100px">
                    <img src="<?php echo $producto->imagen2; ?>" alt="" width="100px" height="100px">
                    <img src="<?php echo $producto->imagen3; ?>" alt="" width="100px" height="100px">
                </div>
                <div class="modal-desc">
                    <h4>Especificaciones</h4>
                    <table class="table" q>
                        <tbody>
                            <tr>
                                <td>Talla</td>
                                <td> 180 ancho x 91,5 alto x 3D (cm)
                                </td>
                            </tr>
                            <tr>
                                <td>Material </td>
                                <td>LED / Acrílico
                                </td>
                            </tr>
                            <tr>
                                <td>Peso </td>
                                <td> 5 kilogramos</td>
                            </tr>
                        </tbody>
                    </table>
                     <a href="#">VISITE LA PÁGINA DEL PRODUCTO</a>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
</body>

</html>