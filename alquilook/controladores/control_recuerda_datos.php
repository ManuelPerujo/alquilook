<?php 

	session_start();
	
	include_once('../funciones/core.php');
	
	
	$email = $_POST['email'];
	$dni = $_POST['dni'];
	
	$mensaje = null; $usuario = null; $pass = null;
	
	$bd = new core();
	
	$query = "select IdUsuario,Usuario,Password from usuarios where Email = '$email' and DNI = '$dni'";
	
	$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
	
	if($result->rowCount() == 1){
		
		$_SESSION['datos_recuperados'] = TRUE;
		
		$usuario = $row['Usuario'];
		$pass = $row['Password'];
		
		$mensaje = "Los datos de usuario solicitados son\r\n<br><br>
					    Nombre de Usuario: <b>$usuario</b> \r\n<br>
					    Contraseña: <b>$pass</b> \r\n<br>"; 
	                
	    $headers = "MIME-Version: 1.0\r\n";
	    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
	    $headers .= "From: info@alquilook.com\r\n";
		
		mail($email, 'Alquilook: Recuperación de datos de Usuario', $mensaje, $headers);
		
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);


?>