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
                			<div class="row">
                				<div class="col-xs-12">
		                				<div class="media">
					                		  <br/>
											  <a class="pull-left" href="#">
											    	<img class="imagenboton2" src="<?php echo $ruta?>img/botones/incidencias.png">
											  </a>
											  <?php 
							  		
											  		$idIncidencia = $_GET['IdIncidencia'];
											  		
													up_incidencia_atendida2($idIncidencia);
													
											  		$incidencia = get_incidencias($idIncidencia);
													
													echo $incidencia;
											  
											  ?>
											  
										</div>
								</div>
							</div>
                			<br />
							<div class="row">
								<div class="col-sm-5 col-xs-3"></div>
                				<div class="col-sm-2 col-xs-6">	
		                				<a class="btn btn-default btn" data-toggle="collapse" data-target="#gestionar">
										 		<i class="fa fa-info"></i> Estado de la incidencia
									    </a>
										<br/>
										<div id="gestionar" class="collapse">
										 		<form class="form-group" method="post" action="">
										 				<div class="radio">
														  <label>
															    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
															    Pendiente
														  </label>
														</div>
														<div class="radio">
														  <label>
															    <input type="radio" name="opciones" id="opciones_2" value="opcion_2" checked>
															    En trámite
														  </label>
														</div>
														<div class="radio">
														  <label>
															    <input type="radio" name="opciones" id="opciones_3" value="opcion_3" checked>
															    Solucionado
														  </label>
														</div>
													<a type="submit" class="btn btn-default btn-sm">OK</a>
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