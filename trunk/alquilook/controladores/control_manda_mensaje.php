<?php
	session_start();
	
	include_once'../funciones/core.php';
	

	
	
		
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && !empty($fechaEntrada) && !empty($fechaSalida)) {
			    				
		$bd = new core();
		
		$query = "insert into factura (IdFactura,IdInmueble,Tipo,FechaEntrada,FechaSalida,Direccion_Contenido)
				 values ('','$idInmueble','agua','$fechaEntrada','$fechaSalida','$direccion')";
		
		$bd->query($query);		 
		
		
		
		$_SESSION['up_exito'] = TRUE;
		
	}if(empty($fechaEntrada) || empty($fechaSalida)){
		
		$_SESSION['up_exito'] = FALSE;
		
	}
	
	$direccion = $_SERVER['HTTP_REFERER'];

	header("Location: ".$direccion);
?>