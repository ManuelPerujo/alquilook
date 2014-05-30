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
                
                <?php
                	
                	if(isset($_SESSION['error_registro'])){
											
						if($_SESSION['error_registro'] == TRUE){
								
							echo "<div class='row'>
							  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
							       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;La Inmobiliaria que intenta registrar ya existe!</h5>
					           		</div>
								  </div>";
								
						}if($_SESSION['error_registro'] == FALSE){
								
							echo "<div class='row'>
							  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
							       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Inmobiliaria registrada!</h5>
					           		</div>
								  </div>";
								
						}
						
						unset($_SESSION['error_registro']);
		
					}

				?>
				
				<?php 
        	
	        		if(isset($_SESSION['error']) && $_SESSION['error'] != null){
						
						$mensaje = $_SESSION['error'];
						
						unset($_SESSION['error']);
																	
						echo "<div class='row'>
						 		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
						       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
										<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;".$mensaje."</h5>
			               		</div>
							  </div>";
												
		            }
	        	
	        	?>
                	
                	<h3><i class="fa fa-building-o"></i> Inmobiliarias</h3>
                	<hr class="grisdoble">
                		<div class="row">
                			<div class="col-sm-5 col-xs-12">
				 						<div class="text-left">
												 	<a class="enlace3" data-toggle="collapse" data-target="#inmo">
												 		<i class="fa fa-pencil"></i> Añadir Inmobiliaria
												    </a>
										</div>
										<div id="inmo" class="collapse">
											 		 <form method="post" class="form-inline" action="<?php echo $ruta?>controladores/control_registro_inmobiliaria.php" >
											 		 	<label><h6 class="negro">Datos ingreso web&nbsp;&nbsp;</h6></label><br/>
														<input type="text" class="form-control" id="usuario" name="usuario_inmobiliaria" placeholder="Usuario" />                                 
								                        <input type="password" class="form-control" id="pass" name="pass_inmobiliaria" placeholder="Contraseña" /><br/>
								                        <input type="email" size="45" class="form-control" id="email" name="email_inmobiliaria" placeholder="Email" />  
								                        <hr class="grissimple">
								                        <label><h6 class="negro">Datos de empresa&nbsp;&nbsp;</h6></label><br/>
								                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nombre de empresa" />
								                        <input type="text" class="form-control" id="dni" name="dni_inmobiliaria" placeholder="DNI/NIF" /><br/>
								                        <input type="text" class="form-control" id="nombre" name="nombre_contacto" placeholder="Nombre del contacto" />
								                        <input type="text" class="form-control" id="apellidos" name="apellidos_contacto" placeholder="Apellidos del contacto" /> 
								                        <input type="tel" class="form-control" id="telefono" name="telefono_contacto" placeholder="Teléfono" /> 
								                        <hr class="grissimple">
								                        <label><h6 class="negro">Datos de contacto&nbsp;&nbsp;</h6></label><br/>

								                        <input type="text" size="45" class="form-control" id="domicilio" name="domicilio_inmobiliaria" placeholder="Dirección postal" />
								                        <input type="text" class="form-control" id="cp" name="cp_inmobiliaria" placeholder="CP" /> 
								                        <input type="text" class="form-control" id="poblacion" name="poblacion_inmobiliaria" placeholder="Población" />
								                        
								                        <br/>
								                        <label><h6 class="gris">Provincia&nbsp;&nbsp;</h6></label> 
									                        <select name="provincia_inmobiliaria">
																 <option value='Álava' checked>Álava</option>
																 <option value='Albacete'>Albacete</option>
																 <option value='Alicante'>Alicante/Alacant</option>
																 <option value='Almería'>Almería</option>
																 <option value='Asturias'>Asturias</option>
																 <option value='Ávila'>Ávila</option>
																 <option value='Badajoz'>Badajoz</option>
																 <option value='Barcelona'>Barcelona</option>
																 <option value='Burgos'>Burgos</option>
																 <option value='Cáceres'>Cáceres</option>
																 <option value='Cádiz'>Cádiz</option>
																 <option value='Cantabria'>Cantabria</option>
																 <option value='Castellón'>Castellón/Castelló</option>
																 <option value='Ceuta'>Ceuta</option>
																 <option value='Ciudad Real'>Ciudad Real</option>
																 <option value='Córdoba'>Córdoba</option>
																 <option value='Cuenca'>Cuenca</option>
																 <option value='Girona'>Girona</option>
																 <option value='Las Palmas'>Las Palmas</option>
																 <option value='Granada'>Granada</option>
																 <option value='Guadalajara'>Guadalajara</option>
																 <option value='Guipuzcoa'>Guipúzcoa</option>
																 <option value='Huelva'>Huelva</option>
																 <option value='Huesca'>Huesca</option>
																 <option value='Illes Balears'>Illes Balears</option>
																 <option value='Jaén'>Jaén</option>
																 <option value='A Coruña'>A Coruña</option>
																 <option value='La Rioja'>La Rioja</option>
																 <option value='León'>León</option>
																 <option value='Lleida'>Lleida</option>
																 <option value='Lugo'>Lugo</option>
																 <option value='Madrid'>Madrid</option>
																 <option value='Málaga'>Málaga</option>
																 <option value='Melilla'>Melilla</option>
																 <option value='Murcia'>Murcia</option>
																 <option value='Navarra'>Navarra</option>
																 <option value='Ourense'>Ourense</option>
																 <option value='Palencia'>Palencia</option>
																 <option value='Pontevedra'>Pontevedra</option>
																 <option value='Salamanca'>Salamanca</option>
																 <option value='Segovia'>Segovia</option>
																 <option value='Sevilla'>Sevilla</option>
																 <option value='Soria'>Soria</option>
																 <option value='Tarragona'>Tarragona</option>
																 <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
																 <option value='Teruel'>Teruel</option>
																 <option value='Toledo'>Toledo</option>
																 <option value='Valencia'>Valencia/Valéncia</option>
																 <option value='Valladolid'>Valladolid</option>
																 <option value='Vizcaya'>Vizcaya</option>
																 <option value='Zamora'>Zamora</option>
																 <option value='Zaragoza'>Zaragoza</option>
															</select> 
														<hr class="grissimple">
								                        <label><h6 class="negro">Datos bancarios&nbsp;&nbsp;</h6></label><br/>
								                        <input type="text" size="45" class="form-control" id="iban" name="iban" placeholder="IBAN" /> 
								                        <br/><br/>
								                       	<input type="submit" class="btn btn-default btn-sm" value="Guardar" />
				                   					</form> 
										</div>
							</div>
					    </div>
					    <hr class="grisdoble">					    
					    <div class="row">
                			<div class="col-sm-10 col-xs-12">
                				
		                		<?php
		                	
			                		$tabla1 = 'usuarios'; $tabla2 = 'inmobiliaria'; $idTabla = 'inmobiliaria.IdUsuario'; 
					            	$arrayAtributos = array(1=>'NombreEmpresa', 2=>'Telefono', 3=>'Provincia', 4=>'Poblacion');
									$arrayOrden = array();
									$arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
									                       'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => FALSE);
					            	$mensaje = get_tablaIncidencias_combinada_filtros_y_opciones($tabla1, $tabla2, $idTabla, $arrayAtributos, $arrayOpciones, $arrayOrden);
			
									echo $mensaje; 
			                		
			                	?>
			                	
		                	</div>
					    </div>
					    <br/><br/>
                </div> 
            </div>
        </div>
    </div>  
  
    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>