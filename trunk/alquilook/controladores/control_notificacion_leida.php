<?php 

	session_start();
	include_once '../funciones/core.php';

	$bd = new core();
	
	$direccion = $_GET['item'];
	
	$direccion = substr($direccion, 3);
	
	$idNotificacion = $_GET['id'];
	
	$query = "update notificacion set Estado = '1' where IdNotificacion = '$idNotificacion'";

	$bd->query($query);
	
	header("Location: ".$direccion);



?>