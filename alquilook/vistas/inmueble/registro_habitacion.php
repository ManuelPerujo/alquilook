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
                <div class="col-xs-9 columnadcha">
                	<div class="row-fluid">	
                		<div class="col-sm-5">
		                	<h3>Características de habitación</h3>
		               		 <form class="form-inline text-left" method="post" action="">  		               		 	                                 
		                       <!--------------------------------------------------------Insertar habitacion----------------------->
		                       <label><h6 class="magenta">Tipo de habitación&nbsp;&nbsp;</h6></label> 
			                        <select class="selector">
										  <option>Salón</option>
										  <option>Cocina</option>
										  <option>Comedor</option>
										  <option>Dormitorio</option>
										  <option>Aseo</option>
										  <option>Otros</option>
									</select>
								<br />	
								<!--------------------------------------------------------Añadir Mobiliario------------------------------------------->
								<div class="panel-group" id="accordion">
					                    <div class="panel panel-default">
					                        <div class="panel-heading">
					                            <p class="panel-title">
					                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					                    				<i class="fa fa-archive"> Añadir Mobiliario</i>
					                  				</a>
					                            </p>
					                        </div>
					                        <div id="collapse1" class="panel-collapse collapse">
					                            <div class="panel-body">
					                            	<p class="mobiliario">
					                                	Sofás&nbsp;&nbsp;
									                        <select class="selector">
																  <option>0</option>
																  <option>1</option>
																  <option>2</option>
																  <option>3</option>
																  <option>4</option>
																  <option>5</option>
															</select>
															<br />
														Sofás&nbsp;&nbsp;
									                        <select class="selector">
																  <option>0</option>
																  <option>1</option>
																  <option>2</option>
																  <option>3</option>
																  <option>4</option>
																  <option>5</option>
															</select>
															<br />
														Sofás&nbsp;&nbsp;
									                        <select class="selector">
																  <option>0</option>
																  <option>1</option>
																  <option>2</option>
																  <option>3</option>
																  <option>4</option>
																  <option>5</option>
															</select>
															<br />
													</p>		
					                            </div>
					                        </div>
					                    </div>
					             <!--------------------------------------------------------Fin Añadir Mobiliario-------------------------------------------> 
					             
					             <!--------------------------------------------------------Añadir Electrodomésticos------------------------------------------->      
					                    <div class="panel panel-default">
					                        <div class="panel-heading">
					                            <h6 class="panel-title">
					                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					                    				<i class="fa fa-cutlery"> Añadir Electrodomésticos</i>
					                  				</a>
					                            </h6>
					                        </div>
					                        <div id="collapse2" class="panel-collapse collapse">
					                            <div class="panel-body">
					                                Anim pariatur cliche reprele VHS.
					                            </div>
					                        </div>
					                    </div>
					                </div>	
								<!--------------------------------------------------------Fin Añadir Electrodomésticos------------------------------------------->
								
								<!-------------------------------------------------------- Fin Insertar habitacion----------------------->
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
		               
		               <div class="col-sm-7">
		               </div>    	              
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