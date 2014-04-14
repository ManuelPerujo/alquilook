<?php 

	session_start();
	
	include_once '../funciones/core.php';
	include_once '../funciones/usuarios.php';

	$idMensaje = $_POST['idMensaje'];
	
	$row = get_rowDatos_from_IdMensaje($idMensaje);
	
	$idUsuario = $row['IdRemitente'];
	$titulo = $row['Titulo'];
	
	$idRemitente = $_SESSION['IdUsuario_sesion'];
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$contenido = $_POST['contenido'];
	
	$bd = new core();
	
	$query = "insert into mensaje (IdMensaje, IdUsuario, IdRemitente, Fecha, Titulo, Contenido, Estado) 
			 values ('','$idUsuario','$idRemitente','$fechaMensaje','$titulo','$contenido','0')";

	$bd->query($query);
	
	header("Location: ".$_SERVER['HTTP_REFERER']);


?>