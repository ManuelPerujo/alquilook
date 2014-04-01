<?php

session_start();


if(isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE ){
	
	unset($_SESSION);
	session_destroy();
	header ("Location: ../vistas/admin/perfil_admin.php");
	
}else{

	unset($_SESSION);
	session_destroy();
	header ("Location: ../index.php");
	
}



?>
