<?php 

	session_start();
	
	include_once '../funciones/core.php';
	
	$idMensaje = $_GET['idMensaje'];
	$tipo = $_GET['tipo'];
		
	$bd = new core();
	
	$query = "delete from mensaje where IdMensaje = '$idMensaje'";
	
	$bd->query($query);
	
	if($tipo == 'propietario'){
		
		header("Location: ../vistas/propietario/tabla_mensajes_propietario.php");	
		
	}if($tipo == 'inquilino'){
		
		header("Location: ../vistas/propietario/tabla_mensajes_inquilino.php");	
		
	}if($tipo == 'admin'){
		
		header("Location: ../vistas/propietario/tabla_mensajes_admin.php");
		
	}
	
	

?>