<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Administracion </title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Zona de registro de productos</h1>
        </header>
        <main class="main">
            <form class="formulario" action="ProductoController.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="insertar">
                <h2>Ingreso de datos</h2>
                <div class="form-row">
                    <label for="nombre">Nombre del producto:</label>
                    <input type="text" name="nombre">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
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
                    </div>
                </div>
                <div class="form-row">
                    <label class="label-form">Descripcion:</label>
                    <textarea name="descripcion" id="" cols="25" rows="3"></textarea>
                </div>
                <div class="form-row">
                    <label for="imagen">Imagen Principal:</label>
                    <input class="input-producto" type="file" name="imagen" id="" accept=".webp , .jpg, .png" multiple>
                </div>
                <div class="form-row"> 
                    <label for="imagen1">Imagen Secundaria 1:</label>
                    <input class="input-producto" type="file" name="imagen1" id="" accept=".webp , .jpg, .png" multiple>
                </div>
                <div class="form-row"> 
                    <label for="imagen2">Imagen Secundaria 2:</label>
                    <input class="input-producto" type="file" name="imagen2" id="" accept=".webp , .jpg, .png" multiple>
                </div>
                <div class="form-row">
                    <label for="imagen3">Imagen Secundaria 3:</label>
                    <input class="input-producto" type="file" name="imagen3" id="" accept=".webp , .jpg, .png" multiple>
                </div>
                <input class="btn-guardar" type="submit" value="Guardar producto">
            </form>
        </main>
    </div>
</body>

</html>