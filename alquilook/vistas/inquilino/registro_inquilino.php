<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    include_once '../../funciones/core.php';
	include_once '../../funciones/registro.php';
	
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_pro.php';
    ?>      



	<div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_propietario.php';
    			?> 
    			
                 <div class="col-xs-10">
                	<div class="row-fluid">	
                		<div class="col-sm-8">
		                	<h3><i class="fa fa-cogs"></i> Añadir inquilinos (Paso 3 de 3)</h3>
		                	<?php 
		               			
		               				if(isset($_SESSION['errorInquilino']) && $_SESSION['errorInquilino'] == TRUE){
										
										unset($_SESSION['errorInquilino']);
											
		               					echo "<div class='row'>
										  		<div class='col-xs-12 text-left alert alert-success alert-dismissable'>
								               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 							<strong><i class='fa fa-exclamation-circle fa-lg'></i></strong>
						 							Debe añadir al menos un inquilino para finalizar el registro
			                					</div>
										  </div>";
										
		               				}
		               				
									if(isset($_SESSION['error_dni']) && $_SESSION['error_dni']  == TRUE){
										
										unset($_SESSION['error_dni']);
											
		               					echo "<div class='row'>
										  		<div class='col-xs-12 text-left alert alert-success alert-dismissable'>
								               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 							<strong><i class='fa fa-exclamation-circle fa-lg'></i></strong>
						 							Usuario ya registrado en el sistema, compruebe el campo DNI
			                					</div>
										  </div>";
										
		               				}
		               			
					        		if(isset($_SESSION['error']) && $_SESSION['error'] != null){
										
										$mensaje = $_SESSION['error'];
										
										unset($_SESSION['error']);
																					
										echo "<div class='row'>
										 		<div class='text-left alert alert-success alert-dismissable'>
										       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
														<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;".$mensaje."</h5>
							               		</div>
											  </div>";
																
						            }
				        	
				        	?>
		               		<form method="post" action="../../controladores/control_registro_inquilino.php?inq=TRUE">
		               			
		               			<?php
		                				                	 
			                		if(!empty($_SESSION['ArrayIdUsuario'])){
			                			
										foreach ($_SESSION['ArrayIdUsuario'] as $key => $value) {
												
											$idInmueble = $_SESSION['IdInmueble'];	
												
											echo get_inquilino($value, $idInmueble);
											
										}				
										
																											
									}
									
			                	?>
		               			
		               			<div class="row fondogris">
				                	<div class="row">
												  		<div class="col-sm-8 text-left alert alert-success alert-dismissable">
										               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								 							<h4><i class="fa fa-info-circle fa-lg"></i> Debe añadir al menos un inquilino.</h4>
					                					</div>
									</div> 
									<div class="row">  
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta"><a class="enlace" data-toggle="collapse"  data-target="#inquilino"><i class="fa fa-plus"></i> Añadir inquilino</a>&nbsp;&nbsp;</h6></label>
										  </div>
									</div>
									<div class="row-fluid">  
											  <div class="col-sm-6 collapse" id="inquilino">
											  			<input type="text" class="form-control" name="nombre_inquilino" placeholder="Nombre *" />
								                        <input type="text" class="form-control" name="apellidos_inquilino" placeholder="Apellidos *" /> 
								                        <input type="text" class="form-control" name="dni_inquilino" placeholder="DNI *" />
								                        <input type="text" class="form-control" name="email_inquilino" placeholder="Email *" /> 
								                        <input type="text" class="form-control" name="telefono_inquilino" placeholder="Teléfono *" /> 
                        								<small>* Campos obligatorios</small>
											  </div>
									</div>  
								</div>
								
								 <br/>
		                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
		                        <a   href="../../controladores/control_registro_inquilino.php?inq=FALSE" class="btn btn-primary btn-sm">Finalizar</a>
		                        								
		                    </form>
		                    <br/>
		               </div>
		               <div class="col-sm-4">
		               	
		               </div>              
                </div> 
              
              </div>
        </div>
    </div>  
   </div>
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>