<?php 
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/core.php';
	
	
	$id_usuario = $_SESSION["IdUsuario_sesion"];
	$datos = array(1=>'Usuario');
	
	$row = get_dato_usuario($id_usuario, $datos);
	
	$usuario = $row['Usuario'];
	
?>


<div class="col-xs-2 text-center columnaizda">
		<div class="row">
        	<div class="col-xs-12">
                	<h6><i class="fa fa-user"></i> Hola <?php echo $usuario ?></h6>
            </div>
        </div>
        
        <div class="row">
        	<div class="col-xs-12">
        			<br/>       	               		
                    <a class="imagenboton" href="<?php echo $ruta?>vistas/inmueble/registro_inmueble.php"><img class="imagenboton magenta-bg" src="<?php echo $ruta?>img/botones/mas_inm.png"></a>
                    <h5>Añadir inmueble</h5>
            </div>
        </div>  
                 
        <div class="row">
        	<div class="col-xs-12"> 
        			<br/>            	
                    <a class="imagenboton" href="#"><img class="imagenboton magenta-bg" src="<?php echo $ruta?>img/botones/ver_inm.png"></a>
                    <h5>Tus inmuebles</h5>
            </div>
        </div>  
        
    	<br/>  
    	      
        <div class="row">
        	<div class="col-xs-12"> 
        			<br/> 
                    <a class="imagenboton2" href="#"><img class="imagenboton2 coral-bg" src="<?php echo $ruta?>img/botones/mensaje.png"></a>
                    <h6>Mensajes</h6>  
            </div>
        </div> 
        
         <div class="row">
        	<div class="col-xs-12"> 
        			<br/> 
                    <a class="imagenboton2" href="<?php echo $ruta?>controladores/control_salir.php"><img class="imagenboton2 coral-bg" src="<?php echo $ruta?>img/botones/salir.png"></a>
                    <h6>Salir</h6>
            </div>
        </div>              
</div>
