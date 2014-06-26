<?php 
	
	session_start();
	
	include_once '../funciones/core.php';
	
	$IdInmueble = $_POST['idInmueble'];
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$contenido = $_POST['contenido'];
		
	$uploaddir = '../documentos/fotosIncidencias/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$direccion = "../".$uploadfile;
		
	move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
	
	$bd = new core();
		
	$query = "insert into incidencia (IdIncidencia,IdInmueble,Tipo,SubTipo,Fecha,Contenido,Direccion_Contenido,Estado,Fase)
				values ('','$IdInmueble','IncidenciasVarias','null','$fechaMensaje','$contenido','$direccion','0','pendiente')";
		
	echo $query;
				
	$bd->query($query);		
		
	$_SESSION['up_exito'] = TRUE;
				
	header("Location: ".$_SERVER['HTTP_REFERER']);
		
		

?>