<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/usuarios.php';
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
	                	<div class="media">
	                		  <br/>
							  <a class="pull-left" href="#">
							    	<img class="imagenboton2 steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/admin.png">
							  </a>
							  <?php 
							  		
							  		$idMensaje = $_GET['IdMensaje'];
							  		
									up_mensaje_leido($idMensaje);
									
							  		$mensaje = get_mensaje($idMensaje);
									
									echo $mensaje;
							  
							  ?>
							  
							  
							  <div class="col-xs-12">	
										<div class="panel-group" id="accordion".$count."">
												<div class="panel panel-default">
																		<div class="panel-heading">
																		     <h6 class="panel-title">
																		        <a class="enlace3 mayusculas" data-toggle="collapse" data-parent="#accordion".$count."" href="#collapse".$count."">
																		        	<img class="imagenboton2 steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/propietario.png">
																			     	&nbsp;&nbsp;&nbsp;
																			           Usuario / Fecha / Asunto: Me pica to lo gordo
																		        </a>
																		     </h6>
																		</div>
																		<div id="collapse".$count."" class="panel-collapse collapse">
																		     <div class="panel-body">
																		     	<p class="ficha">Cuerpo del mensaje</p>
																		     </div>
																		</div>
												</div>
										</div>       
							  </div> 	
							  
							  
							  
							  
							  <div class="text-center">
								 	<a class="btn btn-default btn-sm" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-comment"></i> Responder
								    </a>
								    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <a class="btn btn-default btn-sm" href="../../controladores/control_borrar_mensaje.php?idMensaje=<?php echo $idMensaje; ?>&tipo=propietario">
								 		<i class="fa fa-trash-o"></i> Borrar conversación
								    </a>
							 </div>	
							 <br/>
							 <div id="responder" class="collapse">
							 		<form class="form-group  text-center" method="post" action="../../controladores/control_responde_mensaje.php">
							 			<input type="hidden" value="<?php echo $idMensaje; ?>" name="idMensaje" />
							 			<textarea class="" name="contenido" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<input type="submit" class="btn btn-default btn-sm" value="Enviar" />
							 		</form>
							 </div>
							 <br/>
						</div>
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