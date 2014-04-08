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
	
	
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$bd = new core();
	
	$query = "insert into mensaje (IdMensaje, IdUsuario, Fecha, Titulo, Contenido, Estado) 
			 values ('','$idUsuario','$fechaMensaje','$titulo','$contenido','0')";	
	
	$bd->query($query);
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>