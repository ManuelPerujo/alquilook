<?php

	session_start();
	
	include_once'../funciones/core.php';
	
	$tipo = $_POST['tipo'];
	
	$idUsuario = null;
	
	if($tipo == 'propietario'){
		
		$idUsuario = $_POST['idUsuarioPropietario'];	
		
	}if($tipo == 'inquilino'){
		
		$idUsuario = $_POST['idUsuarioInquilino'];	
		
	}
	
	
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	
	$idRemitente = $_SESSION['IdUsuario_sesion'];
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$bd = new core();
	
	$query = "insert into mensaje (IdMensaje, IdUsuario, IdRemitente, Fecha, Titulo, Contenido, Estado) 
			 values ('','$idUsuario','$idRemitente','$fechaMensaje','$titulo','$contenido','0')";	
	
	$bd->query($query);
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>