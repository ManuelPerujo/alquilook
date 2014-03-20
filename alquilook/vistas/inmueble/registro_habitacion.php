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
		                       <label><h6 class="columnapropietario">Tipo de habitación&nbsp;&nbsp;</h6></label> 
			                        <select class="selector">
										  <option>Salón</option>
										  <option>Cocina</option>
										  <option>Comedor</option>
										  <option>Dormitorio</option>
										  <option>Aseo</option>
										  <option>Otros</option>
									</select>
								<br />	
								
								<hr class="inmueble"/> 
								<div class="collapse-group">
									<label>
										<a class="enlace" data-toggle="collapse" data-target="#mostrarmobiliario">
											<h6 class="columnapropietario">
												<i class="fa fa-pencil"></i> Insertar mobiliario&nbsp;&nbsp;
											</h6>
										</a>	
									</label>
									<p class="collapse" id="mostrarmobiliario">
										fgsfgwe
									</p>
								</div>			
								
								<!--------------------------------------------------------Insertar habitacion----------------------->
								<br/>
		                        <div class="btn-group btn-group-justified">
							        <a  href="#" class="btn btn-primary btn-sm">Atrás</a>
							        <a  href="#" type="submit" class="btn btn-primary btn-sm">Continuar</a>
							    </div>					
		                    </form>
		                    <ul class="pagination pagination-sm">
								  <li><a>1</a></li>
								  <li class="active"><a>2</a></li>
								  <li><a>3</a></li>
							</ul>
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