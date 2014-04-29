<?php

	session_start();
	
	include_once'../funciones/core.php';
	
	$uploaddir = '../documentos/fotosInmueble/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	
	$idInmueble = $_POST['idInmueble'];
		
	$direccion = "../".$uploadfile;
	
	$nombre = $_FILES['userfile']['name'];	
			
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			    				
		$bd = new core();
		
		$query = "insert into foto (IdFoto,IdInmueble,Nombre,Direccion_Contenido) values ('','$idInmueble','$nombre','$direccion')";
							
		$bd->query($query);
						
		$_SESSION['up_exito'] = TRUE;
		
	}
		
	$direccion = $_SERVER['HTTP_REFERER'];

	header("Location: ".$direccion);
	
?> 



