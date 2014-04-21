<?php 

	session_start();
	
	include_once '../funciones/core.php';
	
	$IdInmueble = $_GET['idInmueble'];
			
	$bd = new core();
	
	$query = "delete from inmueble where IdInmueble = '$IdInmueble'";
	
	$bd->query($query);
	
	$query3 = "select IdUsuario from inquilino where IdInmueble = '$IdInmueble'";
	
	$result = $bd->query($query3); $row = $result->fetchAll(PDO::FETCH_ASSOC);
	
	$query2 = "delete from inquilino where IdInmueble = '$IdInmueble'";
	
	$bd->query($query2);
	
	foreach ($row as $key => $value) {
		
		$idUsuario = $value['IdUsuario'];
		
		$query4 = "delete from usuarios where IdUsuario = '$idUsuario'";
		
		$bd->query($query4);
		
	}
	
	$_SESSION['borrado_inmueble'] = TRUE;
	
	header("Location: ../vistas/admin/tabla_usuarios_admin.php");
	
	

?>