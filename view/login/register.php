
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Registrar</title>
</head>
<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>Registro de Usuario </h1>
        </div>
        <div class="clase-login">
            <form class="formulario-login" action="LoginController.php" method="POST">
            <input type="hidden" name="action" value="insertar">  
            

                <label class="label-login">Nombre:</label>
                <input class="input-login" type="text" name="nombre">

                <label class="label-login">Usuario:</label>
                <input class="input-login" type="email" name="email">

                <label class="label-login">Contraseña:</label>
                <input class="input-login" type="password" name="password">
                
                <input class="btn-ingresar" type="submit" value="Registrarse" >
            </form>
        </div>
    </div>
</body>
</html>