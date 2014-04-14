<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera_admin.php';
    ?>   
    <?php
        include_once '../../plantillas/banner_admin.php';
    ?>  
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-sm-10 col-xs-12">
                		<h3><i class="fa fa-envelope"></i> Mensaje:</h3>
                		<hr class="grisdoble"/>
                		
	                	<div class="media">
	                		  <br/>
							  <a class="pull-left" href="#">
							    	<img class="imagenboton2 coral-bg img-circle" src="<?php echo $ruta?>img/banner/inquilino.png">
							  </a>
							  <?php 
							  		
							  		$idMensaje = $_GET['IdMensaje'];
							  		
									up_mensaje_leido($idMensaje);
									
							  		$mensaje = get_mensaje($idMensaje);
									
									echo $mensaje;
							  
							  ?>
							  <div class="text-center">
								 	<a class="btn btn-default btn-sm" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-comment"></i> Responder
								    </a>
								    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <a class="btn btn-default btn-sm" href="../../controladores/control_borrar_mensaje.php?idMensaje=<?php echo $idMensaje; ?>&tipo=admin">
								 		<i class="fa fa-trash-o"></i> Borrar
								    </a>
							 </div>	
							 <br/>
							 <div id="responder" class="collapse">
							 		<form class="form-group  text-center" method="post" action="../../controladores/control_responde_mensaje.php">
							 			<input type="hidden" value="<?php echo $idMensaje; ?>" name="idMensaje" />
							 			<textarea class="" name="contenido" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<input type="submit" class="btn btn-primary btn-sm" value="Enviar" />
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
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>