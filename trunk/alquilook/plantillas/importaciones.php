<?php

$ruta = "";
if (basename(getcwd()) == "alquilook"){
    $ruta = "";
}if(basename($_SERVER['PHP_SELF']) == "contacto.php" || basename($_SERVER['PHP_SELF']) == "gracias.php"

    || basename($_SERVER['PHP_SELF']) == "condiciones.php" || basename($_SERVER['PHP_SELF']) == "registro_propietario.php"
    || basename($_SERVER['PHP_SELF']) == "perfil_propietario.php" || basename($_SERVER['PHP_SELF']) == "verificacion_propietario.php"
	|| basename($_SERVER['PHP_SELF']) == "registro_inmueble.php"){

    $ruta = "../../";    
}if(basename($_SERVER['PHP_SELF']) == "banner.php" || basename($_SERVER['PHP_SELF']) == "banner2.php" || 
	basename($_SERVER['PHP_SELF']) == "banner_pro.php" || basename($_SERVER['PHP_SELF']) == "banner_inq.php" || 
	basename($_SERVER['PHP_SELF']) == "cabecera.php" || basename($_SERVER['PHP_SELF']) == "pie.php"){
    $ruta = "../";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alquilook</title>
    <link rel="shortcut icon" href="<?php echo $ruta?>img/favicon.ico">
    
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:200' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>


    <!-- CSS -->
    <link href="<?php echo $ruta?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $ruta?>css/alquilook.css" rel="stylesheet">
    <link href="<?php echo $ruta?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Javascript-->
   	<script src="<?php echo $ruta?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo $ruta?>js/bootstrap.js"></script>
    <script src="<?php echo $ruta?>js/alquilook.js"></script>

    
    
</head> 