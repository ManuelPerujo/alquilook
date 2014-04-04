<?php 
	
	session_start();
	
	unset($_SESSION['erroRegistro']);
	unset($_SESSION['identifica_inmueble_direccion']);
	unset($_SESSION['identifica_inmueble_tipo']);
	unset($_SESSION['ArrayIdEstancia']);
	unset($_SESSION['ArrayIdInquilino']);
    unset($_SESSION['registro_terminado']);
	unset($_SESSION['ArrayIdUsuario']);
	
	$_SESSION['nuevo_inmueble'] = TRUE;
		
	header("Location: ../vistas/propietario/verificacion_propietario.php");

?>