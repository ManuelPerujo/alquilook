<?php 

	session_start();
	include_once '../funciones/core.php';
	include_once '../funciones/admin.php';

	$bd = new core();
			
	$idNotificacion = $_GET['id'];
	
	$direccionURL =  get_Item_from_notificacion($idNotificacion);
	
	$query = "update notificacion set Estado = '1' where IdNotificacion = '$idNotificacion'";

	$bd->query($query);
	
	header("Location: ".$direccionURL);

?>