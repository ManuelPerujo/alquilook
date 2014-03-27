<?php

    session_start();
    
    include_once("../funciones/core.php");
    
	if(!$_GET){
		exit();
	}
	
	$idEstancia = $_GET['id'];
			
	$bd = new core();
	
	$query = "delete from estancia where IdEstancia = '$idEstancia'";	
	$bd->query($query);
	    
    header("Location: ".$_SERVER['HTTP_REFERER']);


?>