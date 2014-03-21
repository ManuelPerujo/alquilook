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
                		<div class="col-sm-8">
		                	<h3>Características de habitación</h3>
		               		 <form class="form-group text-left" method="post" action="">  		               		 	                                 
		                       <!--------------------------------------------------------Insertar habitacion----------------------->
		                       <div class="row columnadcha">
		                       		<div class="row">			
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta">Elija el tipo de habitación&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="tipoInmueble">
												  <option value="">Salón</option>
												  <option value="">Cocina</option>
												  <option value="">Comedor</option>
												  <option value="">Dormitorio</option>
												  <option value="">Aseo</option>
												  <option value="">Otros</option>
												</select>
										  </div>
									</div>
									<hr class="inmueble"/>
									<!--------------------------------------------------------Añadir mobiliario----------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarmobiliario"><i class="fa fa-archive"></i> Añadir mobiliario</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarmobiliario">
										  <br/>	 	
										  <div class="row-fluid">  
											  <div class="col-md-4">
											  	<label>Sofá&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mesa&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Silla&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Cuadro&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											  <div class="col-md-4">
											  	<label>Cama individual&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Cama doble&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mesita de noche&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Cómoda&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											   <div class="col-md-4">
											  	<label>Accesorios de aseo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mueble de lavabo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Espejo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Hidromasaje&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
										</div>
										<div class="row-fluid">
											<hr class="inmueble"/>
											<div class="col-xs-12">
												<label>Observaciones</label><br/>
												<textarea></textarea>
											</div>	
										</div>		  
									</div>
									<!--------------------------------------------------------Fin Añadir mobiliario----------------------->	
									<hr class="inmueble"/>
									<!--------------------------------------------------------Añadir electrodomesticos---------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarelectrodomesticos"><i class="fa fa-cutlery"></i> Añadir electrodomésticos</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarelectrodomesticos"> 
										  <br/>	
										  <div class="row-fluid">	  
											  <div class="col-md-4">
											  	<label>Televisión&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>DVD/Blu-ray&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Equipo música&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Frigorífico&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											  <div class="col-md-4">
											  	<label>Vitrocerámica&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Horno&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Microondas&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Lavadora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											   <div class="col-md-4">
											  	<label>Secadora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Lavavajillas&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Aspiradora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Termo/Calentador&nbsp;&nbsp;</label> 
							                        <select class="selector" name="">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
										</div>
										<div class="row-fluid">
											<hr class="inmueble"/>
											<div class="col-xs-12">
												<label>Observaciones</label><br/>
												<textarea></textarea>
											</div>	
										</div>		  
									</div>
									<!--------------------------------------------------------Fin Añadir electrodomesticos----------------------->		  
								</div>
								<!-------------------------------------------------------- Fin Insertar habitacion----------------------->
		                        <br/>
		                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Añadir habitación</button>
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
		               <div class="col-sm-4"></div>              
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