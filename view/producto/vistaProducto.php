<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/producto.css">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <?php if(!empty($_SESSION['email'])) : ?>
        <a href="http://localhost/e-commerce/controller/ProductoController.php?action=insertar">Insertar Producto</a><br>
        <a href="http://localhost/e-commerce/controller/LoginController.php?action=logout">Cerrar Sesion</a>
    <?php endif?>    
    <div class="container">
    
    <?php foreach($objProducto as $producto){ ?>
    <div class="card">
        <input type="hidden" value="<?php $producto->IdProducto; ?>">
        <img src="<?php echo $producto->imagen; ?>" name="Imagen" alt="">
        <h4><?php echo $producto->nombre ?></h4>
        <p><?php echo $producto->descripcion ?></p>
        <p><?php echo "$" . $producto->precio ?></p>

        <a href="?action=actualizar&IdProducto=<?php echo $producto->IdProducto?>" >Editar Producto</a>|

        <a href="?action=eliminar&IdProducto=<?php echo $producto->IdProducto; ?>&imagen=<?php echo $producto->imagen?>" style="color: red;" >Eliminar</a>
        
    </div>


<?php } ?>
</div>
</body>
</html>