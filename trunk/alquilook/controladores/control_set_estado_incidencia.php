<?php 

	session_start();
	include_once('../funciones/core.php');
	
	$idIncidencia = $_POST['idIncidencia'];
	
	$estado = $_POST['opciones'];
	
	$bd = new core();
	
	$query = "update incidencia set EstadoIncidencia = '$estado' where IdIncidencia = '$idIncidencia'";
	
	$bd->query($query);
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	

?>
