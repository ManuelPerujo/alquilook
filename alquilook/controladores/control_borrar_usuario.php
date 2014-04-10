<?php

    session_start();
    
    include_once("../funciones/core.php");
	include_once('../funciones/admin.php');
    include_once('../funciones/inmueble.php');
	
	if(!$_GET){
		
		exit();
		
	}
	
	$bd = new core();
	
	if($_GET['tipo'] == 'Propietario'){
		
		$arrayIdInquilinos = get_arrayInquilinosFromInmueble($_GET['idInmueble']);
		
		$arrayIdInquilinos = get_IdInquilinoToUsuario($arrayIdInquilinos);
		
		$idUsuario = $_GET['idUsuario'];
		
		$arrayIdInquilinos [] = $idUsuario;
		
						
		foreach ($arrayIdInquilinos as $key => $value) {
			
			$query = "delete from usuarios where IdUsuario = '$value'";
			
			$bd->query($query);	
			
		}
				
	}if($_GET['tipo'] == 'Inquilino'){
		
		$idUsuario = $_GET['idUsuario'];
		
		$query = "delete from usuarios where IdUsuario = '$idUsuario'";
			
		$bd->query($query);
		
	}				
	
	    
    header("Location: ../vistas/admin/tabla_usuarios_admin.php");


?>