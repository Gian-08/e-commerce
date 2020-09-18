<?php
foreach ($objProductoActual as $productoActual) {
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Administracion </title>
</head>

<body>

    <div class="contenedor">

        <div class="titulo">
            <h1>Actualizar de productos</h1>
        </div>
        <div class="formulario-productos">
            <form class="formulario" action="ProductoController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="actualizar">

                <input type="hidden" name="IdProducto" value="<?php echo $productoActual->IdProducto ?>">

                <label class="label-form">Nombre del producto:</label>
                <input type="text " name="nombre" value="<?php echo $productoActual->nombre; ?>">
                <label class="label-form">Precio:</label>
                <input type="double" name="precio" value="<?php echo $productoActual->precio ?>">
                <label class="label-form">Categoria:</label>
                <select name="categoria">
                    <option value="0">Seleccione categoria</option>
                    <option <?php echo $productoActual->categoria == "Videojuegos" ? 'selected' : ''; ?> value="Videojuegos">Videojuegos</option>
                    <option <?php echo $productoActual->categoria == "Musica" ? 'selected' : ''; ?> value="Musica">Musica</option>
                    <option <?php echo $productoActual->categoria == "Deporte" ? 'selected' : ''; ?> value="Deporte">Deporte</option>
                    <option <?php echo $productoActual->categoria == "Signos zodiacales" ? 'selected' : ''; ?> value="Signos zodiacales">Signos zodiacales</option>
                    <option <?php echo $productoActual->categoria == "Emojis" ? 'selected' : ''; ?> value="Emojis">Emojis</option>
                    <option <?php echo $productoActual->categoria == "Frases en español" ? 'selected' : ''; ?> value="Frases en español">Frases en español</option>
                    <option <?php echo $productoActual->categoria == "Frases en ingles" ? 'selected' : ''; ?> value="Frases en ingles">Frases en ingles</option>
                    <option <?php echo $productoActual->categoria == "Frutas y plantas" ? 'selected' : ''; ?> value="Frutas y plantas">Frutas y plantas</option>
                    <option <?php echo $productoActual->categoria == "Comics y mangas" ? 'selected' : ''; ?> value="Comics y mangas">Comics y mangas</option>
                    <option <?php echo $productoActual->categoria == "Cielo y otros" ? 'selected' : ''; ?> value="Cielo y otros">Cielo y otros</option>
                    <option <?php echo $productoActual->categoria == "Animales" ? 'selected' : ''; ?> value="Animales">Animales</option>
                    <option <?php echo $productoActual->categoria == "Jergas peruanas" ? 'selected' : ''; ?> value="Jergas peruanas">Jergas peruanas</option>
                    <option <?php echo $productoActual->categoria == "Personajes historicos" ? 'selected' : ''; ?> value="Personajes historicos">Personajes historicos</option>
                    <option <?php echo $productoActual->categoria == "Frases en chino" ? 'selected' : ''; ?> value="Frases en chino">Frases en chino</option>
                    <option <?php echo $productoActual->categoria == "Cintas" ? 'selected' : ''; ?> value="Cintas ">Cintas</option>
                </select>
                <label class="label-form">Descripcion:</label>
                <textarea name="descripcion" id="" cols="25" rows="4"><?php echo $productoActual->descripcion ?></textarea>
                
                <label class="label-form">Imagen:</label>
                <input type="hidden" name="imagenUrlActual" value="<?php echo $productoActual->imagen ?>">
                <input class="input-producto" type="file" name="imagen" id="" accept=".webp, .jpg , .png , .jpeg" multiple>

                <div>
                    <img src="<?php echo $productoActual->imagen; ?>" width="100px" height="120px" />
                </div> 

                <input class="btn-guardar" type="submit" value="Guardar producto">

            </form>
        </div>

    </div>
</body>

</html>