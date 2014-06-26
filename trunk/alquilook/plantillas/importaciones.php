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
		|| basename($_SERVER['PHP_SELF']) == "banner_inmo.php" || basename($_SERVER['PHP_SELF']) == "panel_inmobiliaria.php"
		|| basename($_SERVER['PHP_SELF']) == "tabla_inmuebles_inmo.php"	|| basename($_SERVER['PHP_SELF']) == "anadir_inquilino_admin.php" 
		|| basename($_SERVER['PHP_SELF']) == "tabla_notificaciones_inquilino.php" || basename($_SERVER['PHP_SELF']) == "tabla_notificaciones_propietario.php"
		|| basename($_SERVER['PHP_SELF']) == "registro_propietario_inmo.php" || basename($_SERVER['PHP_SELF']) == "registro_inmueble_inmo.php"
		|| basename($_SERVER['PHP_SELF']) == "registro_inquilino_inmo.php" || basename($_SERVER['PHP_SELF']) == "registro_estancia_inmo.php"
		|| basename($_SERVER['PHP_SELF']) == "planes.php" || basename($_SERVER['PHP_SELF']) == "dudas.php"
		|| basename($_SERVER['PHP_SELF']) == "banner3.php" || basename($_SERVER['PHP_SELF']) == "tabla_inmobiliarias_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "perfil_inmobiliaria_admin.php" || basename($_SERVER['PHP_SELF']) == "perfil_inmueble_admin.php"
		|| basename($_SERVER['PHP_SELF']) == "pie_admin_inmo" || basename($_SERVER['PHP_SELF']) == "banner_admin_inmo.php"
		)
	{

  	  $ruta = "../../";   
	   
	}if(basename($_SERVER['PHP_SELF']) == "banner.php" || basename($_SERVER['PHP_SELF']) == "banner2.php" || 
		basename($_SERVER['PHP_SELF']) == "banner_pro.php" || basename($_SERVER['PHP_SELF']) == "banner_inq.php" || 
		basename($_SERVER['PHP_SELF']) == "cabecera.php" || basename($_SERVER['PHP_SELF']) == "banner_admin.php" || 
		basename($_SERVER['PHP_SELF']) == "pie.php" || basename($_SERVER['PHP_SELF']) == "cabecera_admin.php" ||
		basename($_SERVER['PHP_SELF']) == "pie_admin.php" || basename($_SERVER['PHP_SELF']) == "pie_inqu.php" ||
		basename($_SERVER['PHP_SELF']) == "pie_inmo.php"
		){
	    $ruta = "../";
	}

?>


<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Alquilook</title>
    <link rel="shortcut icon" href="<?php echo $ruta?>img/favicon.ico"/>
    
    
    <?php 
    	if(basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "registro_propietario.php"
		  || basename($_SERVER['PHP_SELF']) == "perfil_admin.php"){
    ?>
    
    	<script type="text/javascript" src="<?php echo $ruta?>validacion/validacion.js"></script>
    
    <?php 
		}
     
    	if(basename($_SERVER['PHP_SELF']) == "perfil_usuario_admin.php"){
    ?>
    
    	<script type="text/javascript" src="<?php echo $ruta?>js/popup_confirmacion.js"></script>
    
    <?php 
		}
    ?>
    
  
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'/>


  
    <link href="<?php echo $ruta?>css/bootstrap.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/alquilook.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/responsive-slider-parallax.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/dark.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/ekko-lightbox.css" rel="stylesheet"/>
    <link href="<?php echo $ruta?>css/ekko-lightbox.min.css" rel="stylesheet"/>
    
   
    
   	<script type="text/javascript" src="<?php echo $ruta?>js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/alquilook.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/ekko-lightbox.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/ekko-lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js_slider/responsive-slider.js"></script>
    <script type="text/javascript" src="<?php echo $ruta?>js/multiplicar.js"></script>
    
   
   
    <?php 
    	if(isset($_SESSION["error_log"]) && $_SESSION["error_log"] == TRUE){
    		unset($_SESSION["error_log"]);
    		$message = "Usuario/Contraseña erróneos";
			echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    ?>
    
  	<script type="text/javascript">
		
		$( document ).ready( function() {
		  $('.responsive-slider').responsiveSlider({
		    autoplay: true,
		    interval: 7000,
    		transitionTime: 300
		  });
		});
		
		 $(document).ready(function ($) {
				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox();
				});
			});
			
			
		
		var browser = navigator.appName
		var ver = navigator.appVersion
		var thestart = parseFloat(ver.indexOf("MSIE"))+1
		var brow_ver = parseFloat(ver.substring(thestart+4,thestart+7))
		if ((browser=="Microsoft Internet Explorer") && (brow_ver < 9))
		{
			window.location="https://browser-update.org/update.html";
		}
		

	</script>
	
	<script type='text/javascript'>(function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({ c: '96961ea6-43ca-4ac0-bd23-5dda881a83c3', f: true }); done = true; } }; })();</script>
	

 
</head> 
