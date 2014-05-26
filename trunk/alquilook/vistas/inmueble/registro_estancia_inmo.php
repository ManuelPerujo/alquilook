<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../plantillas/cabecera.php';
    include_once '../../plantillas/banner_inmo.php';
    include_once '../../funciones/registro.php';
	include_once '../../funciones/core.php';
?>

<body>
    


	 <!-- Panel Propietario -->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_inmobiliaria.php';
    			?> 
    			
                <!-- Columna Dcha -->
                <div class="col-xs-10">
                	<div class="row-fluid">	
                		<div class="col-sm-8 col-xs-12">
		                	<h3><i class="fa fa-archive"></i> Añadir mobiliario por estancias (Paso 3 de 4)</h3>
		                	
		                	 <!-- Estancia insertada -->

		                	<?php
		                				                	 
		                		if(!empty($_SESSION['ArrayIdEstancia'])){
		                			
									foreach ($_SESSION['ArrayIdEstancia'] as $key => $value) {
										
										echo get_estancia($value);
										
									}				
									
								}
								
		                	 
		               			
		               				if(isset($_SESSION['errorEstancia']) && $_SESSION['errorEstancia'] == TRUE){
										
										unset($_SESSION['errorEstancia']);
										
										echo "<div class='row'>
										  		<div class='col-sm-1'></div>
										  		<div class='col-sm-10 text-left alert alert-success alert-dismissable'>
								               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 							<strong><i class='fa fa-exclamation-circle fa-lg'></i></strong>
						 							Para añadir una estancia debe completar los datos.
			                					</div>
			                					<div class='col-sm-1'></div>
										  </div>";
										
		               				}
		               			
		               		?>
		                	<!-- Estancia insertada -->
		                	<!-- Insertar habitacion -->
		               		 <form class="form-group text-left" method="post" action="../../controladores/control_registro_estancia.php?estancia=TRUE">  
		                       <div class="row fondogris">
		                       		<div class="row">
										  		<div class="col-sm-8 text-left alert alert-success alert-dismissable">
								               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						 							<h4><i class="fa fa-info-circle fa-lg"></i> Si va a alquilar el inmueble vacío,<br/>no rellene nada abajo y pulse <em>Continuar</em>...</h4>
			                					</div>
									</div> 
		                       		<div class="row">			
										  <div class="col-xs-12">
										  	 <label><h6 class="gris">Elija el tipo de estancia&nbsp;&nbsp;</h6></label> 
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
									<hr class="formulario" />
									<!-- Añadir mobiliario -->	
									<div class="row"> 
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace3" data-toggle="collapse" data-target="#ingresarmobiliario"><i class="fa fa-pencil-square-o"></i> Definir mobiliario</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarmobiliario">
										  <div class="row-fluid">  
											  <div class="col-md-4">
											  		<select class="selector" name="sofa">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
											  		<label>Sofá&nbsp;&nbsp;</label> 
								                <br/>
							                        <select class="selector" name="mesa">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Mesa&nbsp;&nbsp;</label> 
												<br/>
													<select class="selector" name="silla">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>	
													<label>Silla&nbsp;&nbsp;</label> 
								                <br/>
							                        <select class="selector" name="cuadro">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Cuadro&nbsp;&nbsp;</label> 
											  </div>
											  
											  <div class="col-md-4">
							                        <select class="selector" name="camaIndividual">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Cama individual&nbsp;&nbsp;</label>
												<br/>	
							                        <select class="selector" name="camaDoble">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Cama doble&nbsp;&nbsp;</label> 
												<br/>	
							                        <select class="selector" name="mesitaNoche">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Mesita de noche&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="comoda">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Cómoda&nbsp;&nbsp;</label> 
											  </div>
											  <div class="col-md-4">
											  		<select class="selector" name="accesoriosAseo">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Accesorios de aseo&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="muebleAseo">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Mueble de lavabo&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="espejo">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Espejo&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="hidromasaje">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Hidromasaje&nbsp;&nbsp;</label> 
											  </div>
										</div>	  
									</div>
									<!-- Fin Añadir mobiliario -->	
									<hr class="formulario" />
									<!-- Añadir electrodomesticos -->	
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace3" data-toggle="collapse" data-target="#ingresarelectrodomesticos"><i class="fa fa-pencil-square-o"></i> Definir electrodomésticos</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarelectrodomesticos"> 
										  <div class="row-fluid">	  
											  <div class="col-md-4">
											  		<select class="selector" name="television">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Televisión&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="dvd">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>DVD/Blu-ray&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="equipoMusica">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Equipo música&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="frigorifico">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Frigorífico&nbsp;&nbsp;</label> 
											  </div>
											  
											  <div class="col-md-4">
											  		<select class="selector" name="vitroceramica">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Vitrocerámica&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="horno">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Horno&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="microondas">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Microondas&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="lavadora">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Lavadora&nbsp;&nbsp;</label> 
											  </div>
											  
											   <div class="col-md-4">
											  		<select class="selector" name="secadora">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Secadora&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="lavavajillas">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Lavavajillas&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="aspiradora">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Aspiradora&nbsp;&nbsp;</label> 
												<br/>	
													<select class="selector" name="termo">
							                        	<option >0</option><option value="1">1</option><option value="2">2</option>
														<option value="3">3</option><option value="4">4</option><option value="5">5</option>
													</select>
													<label>Termo/Calentador&nbsp;&nbsp;</label> 
											  </div>
										</div>
									</div>
									<!-- Fin Añadir electrodomesticos -->	
									<hr class="formulario" />
									<div class="row-fluid">
											<div class="col-xs-12">
												Observaciones<br/>
												<textarea name="observacion" placeholder="Díganos cualquier cosita que se nos haya escapado"></textarea>
											</div>	
									</div>			  
								</div>
								
		                        <br/>

		                        <button name="submit" type="submit" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Guardar y añadir otra estancia</button>

		                        &nbsp;&nbsp;&nbsp;
		                        <a href="../inquilino/registro_inquilino_inmo.php" class="btn btn-default btn-sm">Continuar</a>
		                    </form>
		                    <!-- Fin Insertar habitacion -->
		                    <br/>
		               </div>
		               <div class="col-sm-4">
		               	
		               </div>              
                </div> 
                <!-- Columna Dcha -->                                                                          
            </div>
        </div>
    </div>  
    <!-- Panel Propietario -->
    </div>
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>