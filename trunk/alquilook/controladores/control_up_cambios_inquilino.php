<?php 
	
	session_start();
	
	include_once '../funciones/core.php';
	
	$IdInmueble = $_POST['idInmueble'];
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$contenido = $_POST['contenido'];
	$subtipo = $_POST['subtipo'];
	
	$bd = new core();
		
	$query = "insert into incidencia (IdIncidencia,IdInmueble,Tipo,SubTipo,Fecha,Contenido,Direccion_Contenido,Estado)
				values ('','$IdInmueble','IncidenciasCambioInquilino','$subtipo','$fechaMensaje','$contenido','null','0')";
		
	echo $query;
				
	$bd->query($query);		
		
	$_SESSION['up_exito'] = TRUE;
				
	header("Location: ".$_SERVER['HTTP_REFERER']);
		
		

?>