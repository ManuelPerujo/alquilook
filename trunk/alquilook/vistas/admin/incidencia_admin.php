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
    
     <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <div class="col-sm-10 col-xs-12">
                		<h3><i class="fa fa-warning"></i> Incidencia:</h3>
                			<div class="row">
                				<div class="col-xs-12">
		                				<div class="media">
					                		  <br/>
											  <a class="pull-left" href="#">
											    	<img class="imagenboton2" src="<?php echo $ruta?>img/botones/incidencias.png" alt="">
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
										 		<form class="form-group" method="post" action="../../controladores/control_set_estado_incidencia.php" >
										 				  <br/>
														  <label>
															    <input type="radio" name="opciones" value="Pendiente" checked>
															    Pendiente
														  </label>
														  <br/>
														  <label>
															    <input type="radio" name="opciones" value="En trámite" >
															    En trámite
														  </label>
															<br/>
														
														  <label>
															    <input type="radio" name="opciones" value="Solucionado" >
															    Solucionado
														  </label>
														  <br/><br/>
													<input type="hidden" name="idIncidencia" value="<?php echo $idIncidencia; ?>"/>	
													<input type="submit" class="btn btn-default btn-sm" value="OK"/>
										 		</form>
									 	</div>
						    	 </div>
						    	 <div class="col-sm-5 col-xs-3"></div>
							</div>	
							<br />	
                </div> 
            </div>
        </div>
    </div>  
   
    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>