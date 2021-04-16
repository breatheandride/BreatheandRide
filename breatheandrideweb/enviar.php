<?php 
  require_once "conexion.php";
  $conexion=conexion();
  //Recibes las variables por POST
  
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        
        if (isset($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]) and $_POST["name"] !="" and $_POST["email"]!="" and $_POST["subject"]!="" and $_POST["message"]!="" ){
                $consulta = "INSERT into mensajes(id, nombre,correo,asunto,mensaje) values ('$name','$email','$subject','$message')";
                $sql = "INSERT into mensajes(id, nombre,correo,asunto,mensaje) values ('0','$name','$email','$subject','$message')";
                //Ejecutas tu consulta y listo
                echo "¡Gracias por tu interés!<br> Nos estaremos comunicando contigo.";
                //Aqui ejecutaremos esa orden
                
        } else {
                echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
        
        }

 ?>


