<?php

    session_start();
    
    include_once("../funciones/core.php");
    
	if(!$_GET){
		exit();
	}
	
				
	$bd = new core();
	
	if(basename($_SERVER['HTTP_REFERER']) == 'registro_estancia.php' || substr(basename($_SERVER['HTTP_REFERER']), 0,25) == 'editar_estancia_admin.php'){
		
		$idEstancia = $_GET['id'];
		$query = "delete from estancia where IdEstancia = '$idEstancia'";	
		
	}if(basename($_SERVER['HTTP_REFERER']) == 'registro_inquilino.php'){
		
		$idUsuario = $_GET['id'];
		$query = "delete from usuarios where IdUsuario = '$idUsuario'";
		
	}
	
		
	$bd->query($query);
	    
    header("Location: ".$_SERVER['HTTP_REFERER']);


?>