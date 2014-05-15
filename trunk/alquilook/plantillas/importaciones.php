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
		|| basename($_SERVER['PHP_SELF']) == "tabla_incidencias_admin.php" || basename($_SERVER['PHP_SELF']) == "mensaje_propietario.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_usuarios_admin.php" || basename($_SERVER['PHP_SELF']) == "perfil_usuario_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "mensaje_admin.php" || basename($_SERVER['PHP_SELF']) == "incidencia_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_inmuebles_inq.php" || basename($_SERVER['PHP_SELF']) == "mensaje_inquilino.php"
		|| basename($_SERVER['PHP_SELF']) == "editar_usuario_admin.php" || basename($_SERVER['PHP_SELF']) == "editar_inmueble_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "editar_estancia_admin.php" || basename($_SERVER['PHP_SELF']) == "editar_inquilino_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_altasnuevas_admin.php" || basename($_SERVER['PHP_SELF']) == "altanueva_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_mensajes_inquilino.php" || basename($_SERVER['PHP_SELF']) == "tabla_mensajes_propietario.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_incidencias_inquilino.php" || basename($_SERVER['PHP_SELF']) == "tabla_incidencias_contrato.php"
		|| basename($_SERVER['PHP_SELF']) == "actualizar.php" || basename($_SERVER['PHP_SELF']) == "recordar.php"
		|| basename($_SERVER['PHP_SELF']) == "anadir_inquilino_admin.php" || basename($_SERVER['PHP_SELF']) == "tabla_notificaciones_inquilino.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_notificaciones_propietario.php")
	{

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es"/>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Alquilook</title>
    <link rel="shortcut icon" href="<?php echo $ruta?>img/favicon.ico"/>
    
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
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'/>


    <!-- CSS -->
    <link href="<?php echo $ruta?>css/bootstrap.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/alquilook.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/responsive-slider-parallax.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/dark.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/ekko-lightbox.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/ekko-lightbox.min.css" rel="stylesheet"/>
    
    <!-- Javascript-->
    
   	<script src="<?php echo $ruta?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo $ruta?>js/bootstrap.js"></script>
    <script src="<?php echo $ruta?>js/bootstrap.min.js"></script>
    <script src="<?php echo $ruta?>js/alquilook.js"></script>
    <script src="<?php echo $ruta?>js/ekko-lightbox.js"></script>
    <script src="<?php echo $ruta?>js/ekko-lightbox.min.js"></script>
    <script src="<?php echo $ruta?>/js_slider/responsive-slider.js"></script>
    <script src="<?php echo $ruta?>/js/multiplicar.js"></script>
    <!--      Ajax      -->
    
    
    <!--   Alertas por error   -->
    <?php 
    	if(isset($_SESSION["error_log"]) && $_SESSION["error_log"] == TRUE){
    		unset($_SESSION["error_log"]);
    		$message = "Usuario/Contraseña erroneos";
			echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    ?>
    
  	<!--   Slider   -->
  	     
     <script type="text/javascript">
		
		$( document ).ready( function() {
		  $('.responsive-slider').responsiveSlider({
		    autoplay: true,
		    interval: 5000,
    		transitionTime: 300
		  });
		});
		
		 $(document).ready(function ($) {
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox();
				});
			});
	 </script>
		
			
		
	<!--   Slider   -->
			
	
		 
    
    
</head> 
