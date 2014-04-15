<?php
 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';	
	    
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
                		<h3><i class="fa fa-warning"></i> Incidencia:</h3>
                		<hr class="grisdoble"/>
                			<div class="row">
                				<div class="col-xs-12">
		                				<div class="media">
					                		  <br/>
											  <a class="pull-left" href="#">
											    	<img class="imagenboton2 coral-bg img-circle" src="<?php echo $ruta?>img/botones/incidencias.png">
											  </a>
											  <?php 
							  		
											  		$idIncidencia = $_GET['IdIncidencia'];
											  		
													up_incidencia_atendida($idIncidencia);
													
											  		$incidencia = get_incidencias($idIncidencia);
													
													echo $incidencia;
											  
											  ?>
											  <div class="text-center">
											  		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 	<a class="btn btn-default btn-sm" data-toggle="collapse" data-target="#responder">
												 		<i class="fa fa-comment"></i> Responder
												    </a>
												    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												    <a class="btn btn-default btn-sm" href="<?php echo $ruta?>vistas/admin/tabla_incidencias_admin.php">
												 		<i class="fa fa-trash-o"></i> Borrar
												    </a>
											 </div>	
											 <br/>
											 <div id="responder" class="collapse">
											 		<form class="form-group  text-center" method="post" action="">
											 			<textarea name="" placeholder="Escriba aquí su mensaje..."></textarea>
											 			<br/>
											 			<a type="submit" class="btn btn-default btn-sm">Enviar</a>
											 		</form>
											 </div>
										</div>
								</div>
							</div>	
                			<hr class="grisdoble" />
                			<br />
							<div class="row">
								<div class="col-sm-5 col-xs-3"></div>
                				<div class="col-sm-2 col-xs-6">	
		                				<a class="btn btn-default btn" data-toggle="collapse" data-target="#gestionar">
										 		<i class="fa fa-info"></i> Estado de la incidencia
									    </a>
										<br/>
										<div id="gestionar" class="collapse">
										 		<form class="form-group  text-center" method="post" action="">
										 			<div class="radio">
														  <label>
															    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
															    Pendiente
														  </label>
														</div>
														<div class="radio">
														  <label>
															    <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
															    Solucionado
														  </label>
													</div>
													<a type="submit" class="btn btn-default btn-lg">OK</a>
										 		</form>
									 	</div>
						    	 </div>
						    	 <div class="col-sm-5 col-xs-3"></div>
							</div>	
							<br />	
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