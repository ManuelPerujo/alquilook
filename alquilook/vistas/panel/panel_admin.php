<?php 

	include_once '../../funciones/core.php';
	include_once '../../funciones/usuarios.php';

	if(isset($_SESSION["IdUsuario_sesion"]) && !empty($_SESSION["IdUsuario_sesion"])){
		
		$id_usuario = $_SESSION["IdUsuario_sesion"];
		$datos = array(1=>'Usuario');
		
		$row = get_dato_usuario($id_usuario, $datos);
		
		$usuario = $row['Usuario'];
		
	}else{
		$usuario = null;
	}

?>



<div class="col-sm-2 col-xs-12">
		<div class="row">
			<br/>
        	<div class="col-xs-12 text-center">
                	<i class="fa fa-user"></i> Hola <?php echo $usuario ?></h6>
            </div>
        </div>
        <br/>
		<div class="row">
        	<div class="col-xs-12">
		        <div class="list-group">
		        	  <a href="<?php echo $ruta ?>vistas/admin/tabla_usuarios_admin.php" class="list-group-item">
							<i class="fa fa-group"></i> Usuarios
					  </a>
					  <a href="<?php echo $ruta ?>vistas/admin/tabla_altasnuevas_admin.php" class="list-group-item">
						    <span class="badge">0</span>
							<i class="fa fa-bell"></i> Altas nuevas
					  </a>
					  <a href="<?php echo $ruta ?>vistas/admin/tabla_incidencias_admin.php" class="list-group-item">
						  	<span class="badge">6</span>
							<i class="fa fa-warning"></i> Incidencias
					  </a>
					  <a href="" class="list-group-item">
						  	<span class="badge">2</span>
							<i class="fa fa-key"></i> Inc. Inquilinos
					  </a>
					  <a href="#" class="list-group-item">
						  	<span class="badge">5</span>
							<i class="fa fa-gavel"></i> Inc. Contratos
					  </a>
					   <a href="<?php echo $ruta ?>vistas/admin/tabla_mensajes_admin.php" class="list-group-item">
						  	<span class="badge">3</span>
							<i class="fa fa-envelope"></i> Mensajes
					  </a>
				</div>
			</div>
		</div>		       
</div>
