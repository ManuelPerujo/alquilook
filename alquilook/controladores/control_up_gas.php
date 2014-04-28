<?php

	session_start();
	
	include_once'../funciones/core.php';
	include_once'../funciones/admin.php';
	include_once'../funciones/registro.php';
	include_once'../funciones/usuarios.php';
	

	$uploaddir = '../documentos/facturasGas/';
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
				 values ('','$idInmueble','gas','$fechaEntrada','$fechaSalida','$direccion')";
		
		$idItem = get_lastId($query);		 
		
		foreach ($idUsuarios as $key => $value) {
			
			$idUsuario = $value;
			
			$query2 = "insert into notificacion (IdNotificacion,IdUsuario,IdItem,Tipo,Contenido,Fecha,Estado)
				  values ('','$idUsuario','$idItem','factura','Nueva Factura de Gas', '$fechaNotificacion','0')";	
			
			$bd->query($query2);
			
		}
		
		$_SESSION['up_exito'] = TRUE;
		
	}if(empty($fechaEntrada) || empty($fechaSalida)){
		
		$_SESSION['up_exito'] = FALSE;
		
	}
	
	$direccion = $_SERVER['HTTP_REFERER'];

	header("Location: ".$direccion);
	
?> 



