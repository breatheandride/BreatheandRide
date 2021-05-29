<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'breatheandride@gmail.com ';
    $mail->Password = 'nosenose22';
    $mail->setFrom('breatheandride@gmail.com', $_POST['email']);
    $mail->addAddress('breatheandride@gmail.com', $_POST['name']);
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject =$_POST['subject'] ;
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Message: {$_POST['message']}


EOT;
        if (!$mail->send()) {
            echo "Perdón, algo salió mal. Por favor, inténtelo de nuevo más tarde";
        } else {
            echo "¡Mensaje enviado! gracias por contactarnos";
        }
    } else {
        $msg = 'Share it with us!';
    }
?>



