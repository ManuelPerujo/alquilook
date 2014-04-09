<?php

    session_start();
    
    include_once("../funciones/core.php");
    
	if(!$_GET){
		exit();
	}
	
					
	$bd = new core();
	
	$idUsuario = $_GET['idUsuario'];
	
	$query = "delete from usuarios where IdUsuario = '$idUsuario'";
		
	$bd->query($query);
	    
    header("Location: ".$_SESSION['direccion']);


?>