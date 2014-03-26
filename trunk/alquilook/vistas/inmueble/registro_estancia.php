<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../plantillas/cabecera.php';
    include_once '../../plantillas/banner_pro.php';
    
?>

<body>
    


	 <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_propietario.php';
    			?> 
    			
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-10">
                	<div class="row-fluid">	
                		<div class="col-sm-8">
		                	<h3><i class="fa fa-cogs"></i> Crear habitaciones<small class="magenta"> (Paso 2 de 3)</small></h3>
		                	
		                	 <!--------------------------------------------------------Estancia insertada----------------------->

		                	<?php
		                				                	 
		                		if(isset($_SESSION['isEstancia']) && $_SESSION['isEstancia'] == TRUE){
		                			
									foreach ($_SESSION['array_estancias'] as $key => $value) {
										
										echo $value;
										
									}
									
								}
								
		                	?>

		                	<!--------------------------------------------------------Estancia insertada----------------------->
		                	<!--------------------------------------------------------Insertar habitacion----------------------->
		               		 <form class="form-group text-left" method="post" action="../../controladores/control_registro_estancia.php">  
		                       <div class="row fondogris">
		                       		<div class="row">			
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta">Elija el tipo de habitación&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="tipoEstancia">
												  <option value="Salon">Salón</option>
												  <option value="Cocina">Cocina</option>
												  <option value="Comedor">Comedor</option>
												  <option value="Dormitorio">Dormitorio</option>
												  <option value="Aseo">Aseo</option>
												  <option value="Otros">Otros</option>
												</select>
										  </div>
									</div>
									<!--------------------------------------------------------Añadir mobiliario----------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarmobiliario"><i class="fa fa-pencil-square-o"></i> Definir mobiliario</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarmobiliario">
										  <br/>	 	
										  <div class="row">
										  		<div class="col-sm-1"></div>
										  		<div class="col-sm-10 text-left alert alert-success alert-dismissable">
								               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 							<strong><i class="fa fa-exclamation-circle fa-lg"></i></strong>
						 							Si va a alquilar el inmueble vacío, simplemente deje todo tal y como está...
			                					</div>
			                					<div class="col-sm-1"></div>
										  </div>
										  <div class="row-fluid">  
											  <div class="col-md-4">
											  	<label>Sofá&nbsp;&nbsp;</label> 
							                        <select class="selector" name="sofa">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mesa&nbsp;&nbsp;</label> 
							                        <select class="selector" name="mesa">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Silla&nbsp;&nbsp;</label> 
							                        <select class="selector" name="silla">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Cuadro&nbsp;&nbsp;</label> 
							                        <select class="selector" name="cuadro">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											  <div class="col-md-4">
											  	<label>Cama individual&nbsp;&nbsp;</label> 
							                        <select class="selector" name="camaIndividual">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Cama doble&nbsp;&nbsp;</label> 
							                        <select class="selector" name="camaDoble">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mesita de noche&nbsp;&nbsp;</label> 
							                        <select class="selector" name="mesitaNoche">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Cómoda&nbsp;&nbsp;</label> 
							                        <select class="selector" name="comoda">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											   <div class="col-md-4">
											  	<label>Accesorios de aseo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="accesoriosAseo">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Mueble de lavabo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="muebleAseo">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Espejo&nbsp;&nbsp;</label> 
							                        <select class="selector" name="espejo">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Hidromasaje&nbsp;&nbsp;</label> 
							                        <select class="selector" name="hidromasaje">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
										</div>
										<div class="row-fluid">
											<div class="col-xs-12">
												<label>Observaciones</label><br/>
												<textarea placeholder="Díganos cualquier cosita que se nos haya escapado"></textarea>
											</div>	
										</div>		  
									</div>
									<!--------------------------------------------------------Fin Añadir mobiliario----------------------->	
									<!--------------------------------------------------------Añadir electrodomesticos---------------------->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace" data-toggle="collapse" data-target="#ingresarelectrodomesticos"><i class="fa fa-pencil-square-o"></i> Definir electrodomésticos</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarelectrodomesticos"> 
										  <br/>	
										  <div class="row">
										  		<div class="col-sm-1"></div>
										  		<div class="col-sm-10 text-left alert alert-success alert-dismissable">
								               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 							<strong><i class="fa fa-exclamation-circle fa-lg"></i></strong>
						 							Si va a alquilar el inmueble vacío, simplemente deje todo tal y como está...
			                					</div>
			                					<div class="col-sm-1"></div>
										  </div>
										  <div class="row-fluid">	  
											  <div class="col-md-4">
											  	<label>Televisión&nbsp;&nbsp;</label> 
							                        <select class="selector" name="television">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>DVD/Blu-ray&nbsp;&nbsp;</label> 
							                        <select class="selector" name="dvd">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Equipo música&nbsp;&nbsp;</label> 
							                        <select class="selector" name="equipoMusica">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Frigorífico&nbsp;&nbsp;</label> 
							                        <select class="selector" name="frigorifico">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											  <div class="col-md-4">
											  	<label>Vitrocerámica&nbsp;&nbsp;</label> 
							                        <select class="selector" name="vitroceramica">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Horno&nbsp;&nbsp;</label> 
							                        <select class="selector" name="horno">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Microondas&nbsp;&nbsp;</label> 
							                        <select class="selector" name="microondas">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Lavadora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="lavadora">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
											  
											   <div class="col-md-4">
											  	<label>Secadora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="secadora">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Lavavajillas&nbsp;&nbsp;</label> 
							                        <select class="selector" name="lavavajillas">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
												<br/>	
												<label>Aspiradora&nbsp;&nbsp;</label> 
							                        <select class="selector" name="aspiradora">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<br/>	
												<label>Termo/Calentador&nbsp;&nbsp;</label> 
							                        <select class="selector" name="termo">
							                        	<option value="0">0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  </div>
										</div>
										<div class="row-fluid">
											<div class="col-xs-12">
												<label>Observaciones</label><br/>
												<textarea placeholder="Díganos cualquier cosita que se nos haya escapado"></textarea>
											</div>	
										</div>		  
									</div>
									<!--------------------------------------------------------Fin Añadir electrodomesticos----------------------->		  
								</div>
								
		                        <br/>

		                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Añadir habitación</button>
<<<<<<< .mine
		                        <a type="button" class="btn btn-primary btn-sm">Continuar</a>
=======
		                        <a type="button" href="../inquilino/registro_inquilino.php" class="btn btn-primary btn-sm">Continuar</a>
>>>>>>> .r101
		                    </form>
		                    <!-------------------------------------------------------- Fin Insertar habitacion----------------------->
		                    <br/>
		               </div>
		               <div class="col-sm-4">
		               	
		               </div>              
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    </div>
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>