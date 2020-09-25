<?php

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];


$body = "Producto: " . $nombre . "<br>Categoria: " . $categoria . "<br>Precio Unitario: " . $precio . "<br>Catidad: ". $cantidad . "<br>Precio Total: s/." . $total.".00";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php'; 

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                      
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'crk.test11@gmail.com';                 
    $mail->Password   = 'Beautiful007041032';                               
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom('crk.test11@gmail.com', 'Jane Doe');
    $mail->addAddress('xris0711@gmail.com');    

   

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Prueba 2';
    $mail->Body    =  $body;
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )

);
    

    $mail->send();
    echo '<script>
            alert("Compra Realizada! Se le envio un mensaje con las especificaciones");
            window.history.go(-1);
          </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>