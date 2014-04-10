<?php 
	
	session_start();
	
	include_once '../funciones/core.php';
	
	unset($_SESSION['erroRegistro']);
	unset($_SESSION['identifica_inmueble_direccion']);
	unset($_SESSION['identifica_inmueble_tipo']);
	unset($_SESSION['ArrayIdEstancia']);
	unset($_SESSION['ArrayIdInquilino']);
    unset($_SESSION['registro_terminado']);
	unset($_SESSION['ArrayIdUsuario']);
	
	$IdInmueble = $_SESSION["IdInmueble"];
	unset($_SESSION["IdInmueble"]);
	
	$localtime_assoc = getdate(); $año = $localtime_assoc['year']; $mes = $localtime_assoc['mon']; $dia = $localtime_assoc['mday'];
	$fechaMensaje = $año.'-'.$mes.'-'.$dia;
	
	$bd = new core();
	
	$query = "insert into incidencia (IdIncidencia,IdInmueble,Tipo,SubTipo,Fecha,Contenido,Direccion_Contenido,Estado)
			values ('','$IdInmueble','altaNueva','null','$fechaMensaje','null','null','0')";
			
	$bd->query($query);		
	
	$_SESSION['nuevo_inmueble'] = TRUE;
		
	header("Location: ../vistas/propietario/verificacion_propietario.php");

?>