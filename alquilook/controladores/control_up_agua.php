<?php
	session_start();
	
	include_once'../funciones/core.php';
	

	$uploaddir = '../documentos/facturasAgua/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	
	$idInmueble = $_POST['idInmueble'];
	$fechaEntrada = $_POST['fechaInicio'];
	$fechaSalida = $_POST['fechaFinal'];
	$direccion = "../".$uploadfile;
	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			    				
		$bd = new core();
		
		$query = "insert into factura (IdFactura,IdInmueble,Tipo,FechaEntrada,FechaSalida,Direccion_Contenido)
				 values ('','$idInmueble','agua','$fechaEntrada','$fechaSalida','$direccion')";
		
		$bd->query($query);		 
		
		$direccion = $_SERVER['HTTP_REFERER'];
		header("Location: ".$direccion);
		
	}
	


?>