<?php

	session_start();
	
	include_once'../funciones/core.php';
	include_once'../funciones/admin.php';
	include_once'../funciones/registro.php';
	include_once'../funciones/usuarios.php';
	

	$uploaddir = '../documentos/facturasAgua/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	
	$idInmueble = $_POST['idInmueble'];
	$idUsuario = null;
	
	$idUsuarios = array();
	
	$fechaEntrada = $_POST['fechaInicio'];
	$fechaSalida = $_POST['fechaFinal'];
	$direccion = "../".$uploadfile;
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaNotificacion = $año.'-'.$mes.'-'.$dia;
	
	$idPropietario = get_IdUsuarioPropietarioFromInmueble($idInmueble);
	
	$idUsuarios [] = $idPropietario;
	
	$idInquilinos = get_IdUsuariosInquilinos_por_inmueble($idInmueble);
	
	foreach ($idInquilinos as $key => $value) {
		
		$idUsuarios [] = $value;
		
	}
	
			
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && !empty($fechaEntrada) && !empty($fechaSalida)) {
			    				
		$bd = new core();
		
		$query = "insert into factura (IdFactura,IdInmueble,Tipo,FechaEntrada,FechaSalida,Direccion_Contenido)
				 values ('','$idInmueble','agua','$fechaEntrada','$fechaSalida','$direccion')";
		
		$idItem = get_lastId($query);		 
		
		$mensaje = "Ha recibido una nueva notificación!\r\n"; 
	
		$mensaje .= "<br><br>
		   			 Para acceder a la notificación acceda a su perfil de usuario a través del siguiente enlace<br>";
								 
		$mensaje .= "<br><br><a href='http://www.alquilook.com'><b>www.alquilook.com</b></a>";			 
					            
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";
		$headers .= "From: info@alquilook.com\r\n";
		
		foreach($idUsuarios as $key => $value){
			
			$idUsuario = $value;
			
			$query2 = "insert into notificacion (IdNotificacion,IdUsuario,IdItem,Tipo,Contenido,Fecha,Estado)
				  values ('','$idUsuario','$idItem','factura','Nueva Factura de Agua', '$fechaNotificacion','0')";	
			
			$bd->query($query2);
			
			$email = get_emailUsuario($idUsuario);
			
			mail($email, 'Alquilook: Nueva notificación', $mensaje, $headers);
			
		}
		
		$_SESSION['up_exito'] = TRUE;
		
	}if(empty($fechaEntrada) || empty($fechaSalida)){
		
		$_SESSION['up_exito'] = FALSE;
		
	}
	
	$direccion = $_SERVER['HTTP_REFERER'];

	header("Location: ".$direccion);
	
?> 



