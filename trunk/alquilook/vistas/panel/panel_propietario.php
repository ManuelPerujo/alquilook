<?php 
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/core.php';
	
	$id_usuario = $_SESSION["IdUsuario_sesion"];
	$datos = array(1=>'Usuario');
	
	$row = get_dato_usuario($id_usuario, $datos);
	
	$usuario = $row['Usuario'];
	
?>


<div class="col-xs-3 text-center columnaizda">
                	<br/>
                	<h5 class="columnapropietario"><i class="fa fa-user"></i> Hola <?php echo $usuario ?></h5>
                	<hr class="propietario"/>
                	               		
                    <a class="imagenboton" href="<?php echo $ruta?>vistas/inmueble/registro_inmueble.php"><img class="imagenboton" src="<?php echo $ruta?>img/mas_inm_pro.png"></a>
                    <h5 class="columnapropietario">Añadir inmueble</h5>
                    
                    <br/>	
                    <a class="imagenboton" href="#"><img class="imagenboton" src="<?php echo $ruta?>img/ver_inm_pro.png"></a>
                    <h5 class="columnapropietario">Ver inmuebles</h5>
                    
                    <hr class="propietario"/>
                    
                    <a class="imagenboton2" href="<?php echo $ruta?>controladores/control_salir.php"><img class="imagenboton2" src="<?php echo $ruta?>img/salir.png"></a>
                    <h6 class="columnapropietario">Salir</h6>
                    
                    <a class="imagenboton2" href="#"><img class="imagenboton2" src="<?php echo $ruta?>img/mensaje.png"></a>
                    <h6 class="columnapropietario">Mensajes</h6>               
</div>
