<?php
    include '../BD/conexionBD.php';

   if(isset($POST['ingresar']))
    {
        $email = $_POST['email'];
        $clave = $_POST['clave'];

        $loginUsuario=$db->prepare("SELECT * FROM usuarios WHERE email =: email AND clave=: clave");
        $loginUsuario->bindParam("email" , $email, PDO::PARAM_STR);
        $loginUsuario->bindParam("clave" , $clave, PDO::PARAM_STR);
        $loginUsuario->execute();

        
    }

    header("Location:../tienda/producto.php");

   /*$infoUsuario = $loginUsuario->FETCH(PDO::FETCH_ASSOC);
   session_start();
   $_SESSION['nombre'] = $infoUsuario['nombre'];
   */
    
?>

