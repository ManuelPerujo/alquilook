<?php 

	session_start();
	
	include_once '../funciones/core.php';
	include_once '../funciones/usuarios.php';
	
	$bd = new core();
	
	$idConversacion = $_POST['idConversacion'];
	
	$idUltimoMensaje = get_last_IdMensaje_from_conversacion($idConversacion);
	
	$query4 = "update conversacion set Estado = '0' where IdConversacion = '$idConversacion'";
	
	$query2 = "update mensaje set Estado = '0' where IdMensaje = '$idUltimoMensaje'";
	
	$bd->query($query2); $bd->query($query4);
	
	$idDestinatario = get_IdRemitente_mensaje($idUltimoMensaje);
			
	$idRemitente = $_SESSION['IdUsuario_sesion'];
	
	if($idDestinatario == $idRemitente){
		
		$query3 = "select IdRemitente,IdDestinatario from mensaje where IdMensaje = '$idUltimoMensaje'";
		
		$result = $bd->query($query3); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		$idDestinatario = $row['IdDestinatario']; $idRemitente = $row['IdRemitente'];
		
	}
		
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$contenido = $_POST['contenido'];
	
	$query = "insert into mensaje (IdMensaje, IdConversacion, IdRemitente, IdDestinatario, Fecha, Contenido, Estado) 
			 values ('','$idConversacion','$idRemitente','$idDestinatario','$fechaMensaje','$contenido','0')";
	
	$bd->query($query);
	
	$_SESSION['mensaje_nuevo'] = TRUE;
			
	header("Location: ".$_SERVER['HTTP_REFERER']);


?>