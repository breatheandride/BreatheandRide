<?php 
    include "./conexion2.php";
    $correo =$_POST['email'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    if($p1 == $p2){
        $p1=sha1($p1);
        $conexion->query("update usuarios set password='$p1' where correo='$correo' ")or die($conexion->error);
        echo '<script type="text/javascript">
    alert("Su contraseña ha sido cambiada exitosamente");
    window.location.href="https://britheride.000webhostapp.com/login.php";
    </script>';
        
    }else{
        echo "no coinciden";
    }
?>