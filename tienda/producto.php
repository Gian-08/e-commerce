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
            <h1>Registro de productos</h1>
        </div>
        <div class="formulario-productos">
            <form class="formulario" action="ValidarProducto.php" method="post" enctype="multipart/form-data" >
                <label class="label-form" >Nombre del producto:</label>
                <input type="text " name="nombre">
                <label class="label-form" >Precio:</label>
                <input type="double" name="precio" >
                <label class="label-form" >Categoria:</label>
                <select name="categoria">
                    <option value="0">Seleccione categoria</option>
                    <option value="Videojuegos">Videojuegos</option>
                    <option value="Musica">Musica</option>
                    <option value="Deporte">Deporte</option>
                    <option value="Signos zodiacales">Signos zodiacales</option>
                    <option value="Emojis">Emojis</option>
                    <option value="Frases en español">Frases en español</option>
                    <option value="Frases en ingles">Frases en ingles</option>
                    <option value="Frutas y plantas">Frutas y plantas</option>
                    <option value="Comics y mangas">Comics y mangas</option>
                    <option value="Cielo y otros">Cielo y otros</option>
                    <option value="Animales">Animales</option>
                    <option value="Jergas peruanas">Jergas peruanas</option>
                    <option value="Personajes historicos">Personajes historicos</option>
                    <option value="Frases en chino">Frases en chino</option>
                    <option value="Cintas ">Cintas</option>
                </select>
                <label class="label-form" >Descripcion:</label>
                <textarea name="descripcion" id="" cols="25" rows="4"></textarea>
                <label class="label-form" >Imagen:</label>
                <input class="input-producto"  type="file" name="imagen" id="" accept=".webp" multiple >

                <input class="btn-guardar" type="submit" value="Guardar producto" >

            </form>
        </div>

    </div>
</body>

</html>