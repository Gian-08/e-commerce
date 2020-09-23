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
        <div class="login">
            <div class="login-title">
                <h1>Bienvenido </h1>
            </div>
            <div class="login-body">
                <form class="form" action="LoginController.php" method="post">
                    <input type="hidden" name="action" value="login">
                    <div class="form-group">
                        <label class="label-login" for="email">Usuario:</label>
                        <input class="input-login" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label class="label-login" for="password">Contraseña:</label>
                        <input class="input-login" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <p>No tienes una cuenta? </p>
                        <a href="http://localhost/e-commerce/controller/LoginController.php?action=registrar">Registrate ahora!</a>
                    </div>
                    <div class="form-group">
                        <input class="btn-ingresar" type="submit" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>