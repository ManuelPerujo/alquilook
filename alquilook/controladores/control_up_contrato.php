<?php
	session_start();
	
	include_once'../funciones/core.php';
	

	$uploaddir = '../documentos/contratos/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	
	$idInmueble = $_POST['idInmueble'];
	$fechaEntrada = $_POST['fechaInicio'];
	$fechaSalida = $_POST['fechaFinal'];
	$direccion = "../".$uploadfile;
	
		
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && !empty($fechaEntrada) && !empty($fechaSalida)) {
			    				
		$bd = new core();
		
		$query = "insert into contrato (IdContrato,IdInmueble,FechaEntrada,FechaSalida,Direccion_Contenido,Estado)
				 values ('','$idInmueble','$fechaEntrada','$fechaSalida','$direccion', '0')";
		
		$bd->query($query);		 
				
		$_SESSION['up_exito'] = TRUE;
		
	}if(empty($fechaEntrada) || empty($fechaSalida)){
		
		$_SESSION['up_exito'] = FALSE;
		
	}
	
	$direccion = $_SERVER['HTTP_REFERER'];

	header("Location: ".$direccion);
?>