<?php
// Varios destinatarios
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$para  =$email . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Restablecer password en Breathe and Ride';
$codigo= rand(1000,9999);


// mensaje

/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
$mensaje='Código para restablecer contraseña:
'.$codigo.'
Para restablecer da click aqui e ingresar el código:
https://britheride.000webhostapp.com/reset.php?email='.$email.'&token='.$token.'
Si usted no envio este codigo favor de omitir'
;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'breatheandride@gmail.com ';
    $mail->Password = 'nosenose22';
    $mail->setFrom($_POST['email']);
    $mail->addAddress($_POST['email'] );
    if ($mail->addReplyTo($_POST['email'])) {
        $mail->Subject =$título ;
        $mail->isHTML(false);
        $mail->Body =<<<EOT
Mensaje:$mensaje


EOT;
        if (!$mail->send()) {
            echo '<script type="text/javascript">
    alert("Perdón, algo salió mal. Por favor, inténtelo de nuevo más tarde");
    window.location.href="https://britheride.000webhostapp.com/restablecer.php";
    </script>';
            #echo "Perdón, algo salió mal. Por favor, inténtelo de nuevo más tarde";
        } else {
            #echo "¡Mensaje enviado! gracias por contactarnos";
            
            $enviado=true;
            
        }
    } else {
        $msg = 'Share it with us!';
    }

?>