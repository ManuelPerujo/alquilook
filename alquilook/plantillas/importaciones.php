<?php

$ruta = "";
if (basename(getcwd()) == "alquilook"){
    $ruta = "";
}if(basename($_SERVER['PHP_SELF']) == "contacto.php" || basename($_SERVER['PHP_SELF']) == "gracias.php"

    || basename($_SERVER['PHP_SELF']) == "condiciones.php" || basename($_SERVER['PHP_SELF']) == "registro_propietario.php"
    || basename($_SERVER['PHP_SELF']) == "perfil_propietario.php" || basename($_SERVER['PHP_SELF']) == "verificacion_propietario.php"
	|| basename($_SERVER['PHP_SELF']) == "registro_inmueble.php" || basename($_SERVER['PHP_SELF']) == "registro_estancia.php"
	|| basename($_SERVER['PHP_SELF']) == "panel_propietario.php" || basename($_SERVER['PHP_SELF']) == "panel_inquilino.php" 
	|| basename($_SERVER['PHP_SELF']) == "registro_inquilino.php" || basename($_SERVER['PHP_SELF']) == "tabla_inmuebles_pro.php"
	|| basename($_SERVER['PHP_SELF']) == "perfil_admin.php" || basename($_SERVER['PHP_SELF']) == "tabla_mensajes_admin.php"
	|| basename($_SERVER['PHP_SELF']) == "tabla_incidencias_admin.php" || basename($_SERVER['PHP_SELF']) == "mensajes_propietario.php"
	|| basename($_SERVER['PHP_SELF']) == "tabla_usuarios_admin.php" || basename($_SERVER['PHP_SELF']) == "perfil_usuario_admin.php"
	|| basename($_SERVER['PHP_SELF']) == "mensaje_admin.php" || basename($_SERVER['PHP_SELF']) == "incidencia_admin.php"
	|| basename($_SERVER['PHP_SELF']) == "tabla_inmuebles_inq.php" || basename($_SERVER['PHP_SELF']) == "mensajes_inquilino.php"
	|| basename($_SERVER['PHP_SELF']) == "editar_usuario_admin.php" || basename($_SERVER['PHP_SELF']) == "editar_inmueble_admin.php"
	|| basename($_SERVER['PHP_SELF']) == "editar_estancia_admin.php" || basename($_SERVER['PHP_SELF']) == "editar_inquilino_admin.php"
	|| basename($_SERVER['PHP_SELF']) == "tabla_altasnuevas_admin.php" || basename($_SERVER['PHP_SELF']) == "altanueva_admin.php"
	){

    $ruta = "../../";    
}if(basename($_SERVER['PHP_SELF']) == "banner.php" || basename($_SERVER['PHP_SELF']) == "banner2.php" || 
	basename($_SERVER['PHP_SELF']) == "banner_pro.php" || basename($_SERVER['PHP_SELF']) == "banner_inq.php" || 
	basename($_SERVER['PHP_SELF']) == "cabecera.php" || basename($_SERVER['PHP_SELF']) == "banner_admin.php" || 
	basename($_SERVER['PHP_SELF']) == "pie.php" || basename($_SERVER['PHP_SELF']) == "cabecera_admin.php" ||
	basename($_SERVER['PHP_SELF']) == "pie_admin.php"
	){
    $ruta = "../";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alquilook</title>
    <link rel="shortcut icon" href="<?php echo $ruta?>img/favicon.ico">
    
    <!--   Cargar Validacion   -->
    
    <?php 
    	if(basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "registro_propietario.php"
		  || basename($_SERVER['PHP_SELF']) == "perfil_admin.php"){
    ?>
    
    	<script language="javascript" type="text/javascript" src="<?php echo $ruta?>validacion/validacion.js"></script>
    
    <?php 
		}
    ?>
    
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>


    <!-- CSS -->
    <link href="<?php echo $ruta?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta?>css/alquilook.css" rel="stylesheet">
    <link href="<?php echo $ruta?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Javascript-->
   	<script src="<?php echo $ruta?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo $ruta?>js/bootstrap.js"></script>
    <script src="<?php echo $ruta?>js/alquilook.js"></script>
    <script src="<?php echo $ruta?>js/jquery.tablesorter.min.js"></script>

    
    <!--      Ajax      -->
    
    
    <!--   Alertas por error   -->
    <?php 
    	if(isset($_SESSION["error_log"]) && $_SESSION["error_log"] == TRUE){
    		unset($_SESSION["error_log"]);
    		$message = "Usuario/Contraseña erroneos";
			echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    ?>
    
    
    
    
    
    
</head> 