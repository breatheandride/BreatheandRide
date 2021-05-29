<?php 
    include "conexion2.php";
    $email =$_POST['email'];
    $bytes = random_bytes(5);
    $token =bin2hex($bytes);

    include "mail_reset.php";
    if($enviado){
        $conexion->query(" insert into passwords(email, token, codigo) 
         values('$email','$token','$codigo') ") or die($conexion->error);
         #header("location:../index.php");
         #echo '<p>Verifica tu email para restablecer tu cuenta</p>';
        echo '<script type="text/javascript">
    alert("Verifica tu email para restablecer tu cuenta");
    window.location.href="https://britheride.000webhostapp.com/login.php";
    </script>';
    }
   

?>