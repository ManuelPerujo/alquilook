<?php 
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';
	include_once '../../funciones/usuarios.php';
	
	if(isset($_SESSION["IdUsuario_sesion"]) && !empty($_SESSION["IdUsuario_sesion"])){
		
		$id_usuario = $_SESSION["IdUsuario_sesion"];
		$datos = array(1=>'Usuario');
		
		$row = get_dato_usuario($id_usuario, $datos);
		
		$usuario = $row['Usuario'];
		
	}else{
		$usuario = null;
	}
	
	$numeroMensajes = get_mensajes_nuevos($id_usuario);
	$numeroNotificaciones = get_numero_notificaciones($id_usuario);
	
?>


<div class="col-xs-2 text-center">
		<br/>
		<div class="row">
        	<div class="col-xs-12">
                	<i class="fa fa-home"></i> Hola <?php echo $usuario; ?></h6>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-xs-12">
        			<br/>       	               		
                    <a class="imagenboton" href="<?php echo $ruta; ?>vistas/propietario/registro_propietario_inmo.php"><img class="imagenboton" src="<?php echo $ruta?>img/botones/mas_inm2.png"></a>
                    <h6>Añadir inmueble</h6>
            </div>
        </div>  
                 
        <div class="row">
        	<div class="col-xs-12"> 
        			<br/>            	
                    <a class="imagenboton" href="<?php echo $ruta; ?>vistas/inmueble/tabla_inmuebles_inmo.php"><img class="imagenboton" src="<?php echo $ruta?>img/botones/ver_inm2.png"></a>
                    <h6>Tus inmuebles</h6>
            </div>
        </div>  
        
         <div class="row">
        	<div class="col-xs-12"> 
        			<br/> 
                    <a class="imagenboton2" href="<?php echo $ruta?>controladores/control_salir.php"><img class="imagenboton2" src="<?php echo $ruta?>img/botones/salir.png"></a>
                    <h6>Salir</h6>
            </div>
        </div>              
</div>
