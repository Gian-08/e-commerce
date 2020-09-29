<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/index.css">
    <title>E-commerce</title>
</head>

<body>
    <div class="contenedor">
        <nav class="nav">
            <div class="nav-logo">
                <img src="imagenes/logo.jpg" alt="">
            </div>
            <ul class="nav-list">
                <li><a href="">Inicio</a></li>
                <li><a href="">Productos</a></li>
                <li><a href="">Quienes Somos</a></li>
                <li><a href="">Contacto</a></li>
                <li><a href="controller/LoginController.php?action=login"><i class="fas fa-user"></i></a></li>
                <li class="submenu">
                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                    <div id="carrito">
                        <table id="lista-carrito" class="u-full-width">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <button id="vaciar-carrito" class="button u-full-width">VACIAR CARRITO</button>
                    </div>
                </li>
            </ul>
        </nav>
        <main class="main">
            <header class="main-header">
                <h1>NEON LED<br> STORE</h1>
            </header>
        </main>
    </div>
</body>

</html>