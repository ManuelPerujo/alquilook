<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>   
    <?php
        include_once '../../plantillas/banner_pro.php';
    ?>  
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_propietario.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-10">
                		<h3><i class="fa fa-envelope-o"></i> Mensaje:</h3>
                		<hr class="grissimple">
                		<div class="text-left">
								 	<a class="enlace2" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-pencil"></i> Nuevo mensaje
								    </a>
						</div>
						<div id="responder" class="collapse">
									<br/>
							 		<form class="form-group  text-left" method="post" action="../../controladores/control_responde_mensaje.php">
							 			<input type="hidden" value="<?php echo $idMensaje; ?>" name="idMensaje" />
							 			<textarea class="" name="contenido" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<input type="submit" class="btn btn-default" value="Enviar" />
							 		</form>
						</div>
						<hr class="grissimple">
                		
	                	<?php 
                	
                		$idUsuario = $_SESSION['IdUsuario_sesion'];
                	
                		$tabla = 'mensaje'; $idTabla = 'IdMensaje'; $arrayAtributos = array(1=>'Fecha',2=>'Titulo',3=>'Contenido');
                        $filtro = array('IdUsuario' => $idUsuario);
                        $arrayOrden = array(1 => 'Fecha', 2=> 'desc');
                        $arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
						
						echo $mensaje;
                	
                	?>
                	<br/>
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>