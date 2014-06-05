<?php

    session_start();
    
    include_once("../funciones/core.php");
	include_once("../funciones/admin.php");
    
	if(!$_GET){
		exit();
	}
	
				
	$bd = new core();
	
	if(basename($_SERVER['HTTP_REFERER']) == 'registro_estancia.php' || substr(basename($_SERVER['HTTP_REFERER']), 0,25) == 'editar_estancia_admin.php'){
		
		$idEstancia = $_GET['id'];
		$query = "delete from estancia where IdEstancia = '$idEstancia'";	
		
	}if(basename($_SERVER['HTTP_REFERER']) == 'registro_estancia_inmo.php' || substr(basename($_SERVER['HTTP_REFERER']), 0,25) == 'editar_estancia_admin.php'){
		
		$idEstancia = $_GET['id'];
		$query = "delete from estancia where IdEstancia = '$idEstancia'";	
		
	}if(basename($_SERVER['HTTP_REFERER']) == 'registro_inquilino.php'){
		
		$idUsuario = $_GET['id'];
		$idInmueble = $_GET['idInmueble'];
		
		$query = "delete from usuarios where IdUsuario = '$idUsuario'";
		
		$query2 = "select IdInquilino from inquilino where IdUsuario = '$idUsuario'";
		$result = $bd->query($query2); $row = $result->fetch(PDO::FETCH_ASSOC);
		$idInquilino = $row['IdInquilino'];
		
		$arrayInquilinos = get_arrayInquilinosFromInmueble($idInmueble);
		$arrayInquilinosSesion = explode("-", $_SESSION['ArrayIdInquilino'],-1);
		
		
		$key = array_search($idInquilino, $arrayInquilinos);
		$keySesion = array_search($idInquilino, $_SESSION['ArrayIdInquilino']);
		
		unset($arrayInquilinos[$key]);
		unset($arrayInquilinosSesion[$keySesion]);
		
		$arrayInquilinosSesion = implode("-", $arrayInquilinosSesion);
		$_SESSION['ArrayIdInquilino'] = $arrayInquilinosSesion."-";
		
		if($_SESSION['ArrayIdInquilino'] == '-'){
			
			$_SESSION['ArrayIdInquilino'] = '';
			
		}
		
		$arrayInquilinos = implode("-", $arrayInquilinos);
		$arrayInquilinos = $arrayInquilinos."-";
		
		$query3 = "update inmueble set ArrayIdInquilino = '$arrayInquilinos' where IdInmueble = '$idInmueble'";
		$bd->query($query3);
		
		$query4 = "select ArrayIdInquilino from inmueble where IdInmueble = '$idInmueble'";
		$result2 = $bd->query($query4); $row2 = $result2->fetch(PDO::FETCH_ASSOC);
		
		if($row2['ArrayIdInquilino'] == '-'){
			
			$query5 = "update inmueble set ArrayIdInquilino = 'null' where IdInmueble = '$idInmueble'";
			$bd->query($query5);
			
		}
		
	}if(basename($_SERVER['HTTP_REFERER']) == 'registro_inquilino_inmo.php'){
		
		$idUsuario = $_GET['id'];
		$idInmueble = $_GET['idInmueble'];
		
		$query = "delete from usuarios where IdUsuario = '$idUsuario'";
		
		$query2 = "select IdInquilino from inquilino where IdUsuario = '$idUsuario'";
		$result = $bd->query($query2); $row = $result->fetch(PDO::FETCH_ASSOC);
		$idInquilino = $row['IdInquilino'];
		
		$arrayInquilinos = get_arrayInquilinosFromInmueble($idInmueble);
		$arrayInquilinosSesion = explode("-", $_SESSION['ArrayIdInquilino'],-1);
		
		
		$key = array_search($idInquilino, $arrayInquilinos);
		$keySesion = array_search($idInquilino, $arrayInquilinosSesion);
		
		unset($arrayInquilinos[$key]);
		unset($arrayInquilinosSesion[$keySesion]);
		
		$arrayInquilinosSesion = implode("-", $arrayInquilinosSesion);
		$_SESSION['ArrayIdInquilino'] = $arrayInquilinosSesion."-";
		
		if($_SESSION['ArrayIdInquilino'] == '-'){
			
			$_SESSION['ArrayIdInquilino'] = '';
			
		}
		
		$arrayInquilinos = implode("-", $arrayInquilinos);
		$arrayInquilinos = $arrayInquilinos."-";
		
		$query3 = "update inmueble set ArrayIdInquilino = '$arrayInquilinos' where IdInmueble = '$idInmueble'";
		$bd->query($query3);
		
		$query4 = "select ArrayIdInquilino from inmueble where IdInmueble = '$idInmueble'";
		$result2 = $bd->query($query4); $row2 = $result2->fetch(PDO::FETCH_ASSOC);
		
		if($row2['ArrayIdInquilino'] == '-'){
			
			$query5 = "update inmueble set ArrayIdInquilino = 'null' where IdInmueble = '$idInmueble'";
			$bd->query($query5);
			
		}
	}
	
		
	$bd->query($query);
	    
    header("Location: ".$_SERVER['HTTP_REFERER']);


?>