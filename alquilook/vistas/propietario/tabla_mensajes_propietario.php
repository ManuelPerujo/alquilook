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
    
   <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_propietario.php';
    			?> 
                
              <div class="col-xs-10">
                		<h3><i class="fa fa-envelope-o"></i> Mensajes:</h3>
                		<hr class="grissimple">
                		<div class="text-left">
								 	<a class="enlace3" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-pencil"></i> Nueva Conversación
								    </a>
						</div>
						<div id="responder" class="collapse">
									<br/>
							 		<form class="form-group  text-left" method="post" action="../../controladores/control_manda_mensaje.php">
							 			<input type="text" placeholder="Asunto" name="titulo" /><br/><br/>
							 			<textarea class="" name="contenido" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<input type="submit" class="btn btn-default" value="Enviar" />
							 		</form>
						</div>
						<hr class="grissimple">
                		
	                	<?php 
                	
                		$idUsuario = $_SESSION['IdUsuario_sesion'];
                	
                		$tabla = 'conversacion'; $idTabla = 'IdConversacion'; $arrayAtributos = array(1=>'FechaInicio',2=>'Titulo');
                        $filtro = array('IdUsuario' => $idUsuario);
                        $arrayOrden = array(1 => 'FechaInicio', 2=> 'desc');
                        $arrayOpciones = array('opciones' => TRUE, 'borrar' => FALSE, 'modificar' => FALSE, 'responder' => FALSE,
                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
						
						echo $mensaje;
                	
                	?>
                	<br/>
                </div> 
           </div>
        </div>
    </div>  

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>