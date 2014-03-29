<?php 

	unset($_SESSION['erroRegistro']);
	unset($_SESSION['identifica_inmueble_direccion']);
	unset($_SESSION['identifica_inmueble_tipo']);
	unset($_SESSION['ArrayIdEstancia']);
	unset($_SESSION['ArrayIdInquilino']);
    unset($_SESSION['registro_terminado']);
	unset($_SESSION['ArrayIdUsuario']);
	
	header("Location: ../vistas/inmueble/tabla_inmuebles.php");

?>