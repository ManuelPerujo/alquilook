<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';
	include_once '../../funciones/registro.php';    
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
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-home"></i> Mobiliario</h3>
		                		</div>
		            </div>
		            <div class="row">
                	    		<div class="col-xs-12">
		                			<i class="fa fa-pencil"></i> Editar habitaciones - (Paso 2 de 2)
		                		</div>
		            </div>
		            
		            <?php 
		            	if(isset($_GET['idInmueble'])){
		            		
							$idInmueble = $_GET['idInmueble'];
							
							echo modifica_estancia();	
							
														
		            	}
		            	
		            
		            ?>
		            
		           <div class="row-fluid">
		                	<div class="col-sm-8">
		               		<form class="form-group text-left" method="post" action="../../controladores/control_registro_estancia.php?estancia=TRUE&idInmueble=<?php echo $idInmueble; ?>">  
		                       <div class="row">
		                       		<div class="row">			
										  <div class="col-xs-12">
										  	 <label><h6>Elija el tipo de habitación&nbsp;&nbsp;</h6></label> 
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
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace2" data-toggle="collapse" data-target="#ingresarmobiliario"><i class="fa fa-plus"></i> Añadir mobiliario</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarmobiliario">
										<br />
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
									</div>
									<hr class="formulario" />
									<div class="row">  
										  <div class="col-xs-12 collapse-group">
										  	 <a class="enlace2" data-toggle="collapse" data-target="#ingresarelectrodomesticos"><i class="fa fa-plus"></i> Añadir electrodomésticos</a>
										  </div>
									</div>
									<div class="row collapse" id="ingresarelectrodomesticos"> 
										<br />
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
									</div>
								</div>
								
		                        <br/>

		                        <button name="submit" type="submit" class="btn btn-default btn-sm">Guardar</button>
		                        &nbsp;&nbsp;&nbsp;
		                        <?php
		                         
		                        	$direccion = null;
		                        	$direccion = $_SESSION['direccion'];
																										
		                        ?>
		                        
		                        <a type="button" href="<?php echo $direccion; ?>" class="btn btn-default btn-sm">Finalizar</a>
		                    </form>
		                    <br/>
		                    </div>
		                    </div>
                	
                </div> 
           </div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>