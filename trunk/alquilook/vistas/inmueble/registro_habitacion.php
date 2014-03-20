<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
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
                <div class="col-xs-9">
                	<div class="row-fluid">	
                		<div class="col-xs-9">
		                	<h3>Características de habitación</h3>
		               		 <form class="form-group text-left" method="post" action="">  		               		 	                                 
		                       <!--------------------------------------------------------Insertar habitacion----------------------->
		                       <div class="row columnadcha">
		                       		<div class="row">			
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta">Elija el tipo de habitación&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="tipoInmueble">
												  <option value="">Gloryhole</option>
												  <option value="">Local comercial</option>
												  <option value="">Garaje</option>
												  <option value="">Finca rústica</option>
												</select>
										  </div>
									</div>
									<hr class="inmueble"/>
									<!--------------------------------------------------------Añadir mobiliario----------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarmobiliario"><i class="fa fa-pencil"></i> Añadir mobiliario</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarmobiliario"> 	  
										  <div class="col-xs-4">
										  	<label><h6 class="magenta">Sofá&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
											<br/>	
											<label><h6 class="magenta">Mesa&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
											<br/>	
											<label><h6 class="magenta">Silla&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
										  </div>
										  <div class="col-xs-4 pull-left">
										  	
										  </div>
										  <div class="col-xs-4 pull-left">
										  
										  </div>
									</div>
									<!--------------------------------------------------------Fin Añadir mobiliario----------------------->	
									<hr class="inmueble"/>
									<!--------------------------------------------------------Añadir electrodomesticos---------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarelectrodomesticos"><i class="fa fa-pencil"></i> Añadir electrodomésticos</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarelectrodomesticos"> 	  
										  <div class="col-xs-4 pull-left">
										  	<label><h6 class="magenta">Sofá&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
										  </div>
										  <div class="col-xs-4 pull-left">
										  	<label><h6 class="magenta">Mesa&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
										  </div>
										  <div class="col-xs-4 pull-left">
										  	<label><h6 class="magenta">Tipo de habitación&nbsp;&nbsp;</h6></label> 
						                       <select class="selector" name="">
						                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
													<option value="3">3</option><option value="4">4</option><option value="5">5</option>
												</select>
										  </div>
									</div>
									<!--------------------------------------------------------Fin Añadir electrodomesticos----------------------->		  
								</div>
								<!-------------------------------------------------------- Fin Insertar habitacion----------------------->
		                        <br/>
		                        <a data-toggle="modal" href="#myModal" class="enlace">
		    					<button type="button" class="btn btn-primary btn-sm">Continuar</button>
		    					</a>    					   					
							    <div class="modal fade" id="myModal">
							        <div class="modal-dialog">
							          <div class="modal-content">
							            <div class="modal-header">
							              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							              <h5 class="modal-title">Revise sus datos antes de continuar:</h5>
							            </div>
							            <div class="modal-body">
							            	<p>¿Te gusta el adobo? Pues vamos al lío...</p>  					            	
							            </div>
							            <div class="modal-footer">
							            	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancelar</button>
							              <button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
							          </div>
							        </div>
							      </div>
		    					</div>								
		                    </form>
		                    <br/>
		               </div>
		               <div class="col-xs-3">fdasfwe</div>              
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