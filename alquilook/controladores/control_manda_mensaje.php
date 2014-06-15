<?php

	session_start();
	
	include_once'../funciones/core.php';
	include_once'../funciones/registro.php';
	include_once'../funciones/admin.php';
	
		
	$bd = new core();
	
	$idDestinatario = null;
	
	if($_SESSION['tipo'] == 'Admin'){
		
		if(isset($_POST['idUsuarioPropietario'])){
			
			$idUsuario = $_POST['idUsuarioPropietario'];
		
			$idDestinatario = $_POST['idUsuarioPropietario'];
			
		}if(isset($_POST['idUsuarioInquilino'])){
			
			$idUsuario = $_POST['idUsuarioInquilino'];
		
			$idDestinatario = $_POST['idUsuarioInquilino'];	
			
		}
		
	}if($_SESSION['tipo'] == 'Propietario'){
                
        $idUsuario = $_SESSION['IdUsuario_sesion'];
                
    	$idDestinatario = get_idAdmin();        
                
    }if($_SESSION['tipo'] == 'Inquilino'){
                
        $idUsuario = $_SESSION['IdUsuario_sesion'];
                
    	$idDestinatario = get_idAdmin();        
                
    }
	
	
	
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	
	$idRemitente = $_SESSION['IdUsuario_sesion'];
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$query2 = "insert into conversacion (IdConversacion,IdUsuario,Titulo,FechaInicio,Estado) values ('','$idUsuario','$titulo','$fechaMensaje','0')";
	
	$idConversacion = get_lastId($query2);
		
	$query = "insert into mensaje (IdMensaje, IdConversacion, IdRemitente, IdDestinatario, Fecha, Contenido, Estado) 
			 values ('','$idConversacion','$idRemitente','$idDestinatario','$fechaMensaje','$contenido','0')";	
	
	$bd->query($query);
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>
