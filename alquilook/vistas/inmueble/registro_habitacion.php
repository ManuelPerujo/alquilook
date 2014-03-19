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
                		<div class="col-sm-5 text-left collapse-group">
		                	<h3>Características de habitación</h3>
		               		 <form class="form-inline text-left" method="post" action="">  		               		 	                                 
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
		                        <label>
		                        	<h6 class="columnapropietario">
		                        		<a class="enlace" data-toggle="collapse" data-target="#vermobiliario">
		                        			<i class="fa fa-pencil"></i> Incluir mobiliario&nbsp;&nbsp;
		                        		</a>
		                        	</h6>
		                        </label>
		                        	<div class="collapse" id="vermobiliario">                                
				                        <p class="mobiliario pull-left">
					                        	Sofá
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Mesa
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Silla
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>	
												Cuadro
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>
					                        	Cama individual
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Cama doble
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												
											</p>	
											<p class="pull-right">
												Mesita de noche
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>	
												Cómoda
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Accesorios Aseo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Mueble lavabo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Espejo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Hidromasaje
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>			
											</p>		
										</div>
										
										<hr class="inmueble"/> 
		                        <label>
		                        	<h6 class="columnapropietario">
		                        		<a class="enlace" data-toggle="collapse" data-target="#verelectrodomesticos">
		                        			<i class="fa fa-pencil"></i> Incluir electrodomésticos&nbsp;&nbsp;
		                        		</a>
		                        	</h6>
		                        </label>
		                        	<div class="collapse" id="verelectrodomesticos">                                
				                        <p class="mobiliario pull-left">
					                        	Sofá
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Mesa
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Silla
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>	
												Cuadro
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>
					                        	Cama individual
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												Cama doble
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>
												
											</p>	
											<p class="pull-right">
												Mesita de noche
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
												<br/>	
												Cómoda
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Accesorios Aseo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Mueble lavabo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Espejo
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>	
												<br/>	
												Hidromasaje
						                        	<select class="selector">
													  <option>0</option>	
													  <option>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>			
											</p>		
										</div>
												
		                        <br/><br/>
		                        <ul class="pagination">
								  <li><a href="#">Paso 1</a></li>
								  <li class="active"><a href="#">Paso 2</a></li>
								  <li><a href="#">Paso 3</a></li>
								</ul>
		                    </form>
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