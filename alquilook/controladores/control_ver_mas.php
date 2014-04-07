<?php 
	
	session_start();
	
	include_once'../funciones/core.php';
	
	if($_GET){
		
		$bd = new core();
		
		$tabla = $_GET['tabla'];
		
		$idTabla = $_GET['idTabla'];
		
		$id = $_GET['id'];
		
		$query = "select Direccion_Contenido from $tabla where $idTabla = '$id' ";
		
		$result = $bd->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		$direccion = "alquilook/".$row['Direccion_Contenido'];
		
		header("Location: ".$direccion);
		
	}else{
		
		exit();
		
	}
	
	
	
	
	


?>