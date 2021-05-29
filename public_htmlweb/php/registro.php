<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$correo=$_POST['correo'];
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);

		if(buscaRepetido($usuario,$password,$conexion)==1) {
			echo 2;
		}else if(buscaRepetido2($correo,$conexion)==1) {
			echo 3;
		}else{
			$sql="INSERT into usuarios (correo,usuario,password)
				values ('$correo','$usuario','$password')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from usuarios 
				where usuario='$user' and password='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}


		function buscaRepetido2($correo,$conexion){
			$sql="SELECT * from usuarios 
				where correo='$correo'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
 
 ?>
 
 

 
 
 
