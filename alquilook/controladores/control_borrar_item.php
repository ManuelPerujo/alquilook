<?php 
	
	session_start();
	
	include_once '../funciones/core.php';
	include_once '../funciones/inmueble.php';
	
	if($_GET){
		
		$bd = new core();
		
		$tabla = $_GET['tabla'];
		
		$idTabla = $_GET['idTabla'];
		
		$id = $_GET['id'];
		
		if(basename($_SERVER['HTTP_REFERER']) == 'tabla_usuarios_admin.php?'.$_SERVER['QUERY_STRING']){
			
			/* Averiguo la ruta del archivo para eliminar tanto de la base de datos como de los archivos */
		
			$query = "select Direccion_Contenido from $tabla where $idTabla = '$id' ";
			
			$result = $bd->query($query);
			
			$row = $result->fetch(PDO::FETCH_ASSOC);
			
			$direccion = "alquilook/".$row['Direccion_Contenido'];
			
			/* Procedemos a borrar */
			
			if(file_exists($direccion)){
				
				unlink($direccion);
				
			}	
			
		}if(basename($_SERVER['HTTP_REFERER']) == 'tabla_inmobiliarias_admin.php'){
			
			/* Averiguo la ruta del archivo para eliminar tanto de la base de datos como de los archivos */
			
			$query = "delete from usuarios where IdUsuario = '$id'";

			$bd->query($query);
			
		}
		
		echo basename($_SERVER['HTTP_REFERER']);
		
		$query2 = "delete from $tabla where $idTabla = '$id' ";

		$bd->query($query2);
		
		header("Location: ".$_SERVER['HTTP_REFERER']);
		
	}else{
		
		exit();
		
	}
	
	
	
	
	


?>