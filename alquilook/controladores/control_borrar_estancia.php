<?php

    session_start();
    
    include_once("../funciones/core.php");
    
	if(!$_GET){
		exit();
	}
	
	$arrayIdEstancias = unserialize(stripslashes($_GET['id']));
	
	$bd = new core();
	$bd->ConectaBD();
		
	foreach ($arrayIdEstancias as $key => $value) {
		
		try{
        	
	    	$query = "delete from estancia where IdEstancia = '$value'";
	        $bd->query($query);

	    }catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	    }	
		
	}
	    
    header("Location: ".$_SERVER['HTTP_REFERER']);


?>