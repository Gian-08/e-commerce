
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>Bienvenido </h1>
        </div>
        <div class="clase-login">
            <form class="formulario-login" action="LoginController.php" method="post">
                <input type="hidden" name="action" value="login">
                <label class="label-login">Usuario:</label>
                <input class="input-login" type="email" name="email">
                <label class="label-login">Contraseña:</label>
                <input class="input-login" type="password" name="password">
                <p>No tienes una cuenta? <a href="http://localhost/e-commerce/controller/LoginController.php?action=registrar">Registrate ahora!</a></p>
                <input class="btn-ingresar" type="submit" value="Ingresar" >
            </form>
        </div>
    </div>
</body>
</html>