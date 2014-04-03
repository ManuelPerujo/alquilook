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
		                	<h3><i class="fa fa-cogs"></i> Crear inquilinos<small class="magenta"> (Paso 3 de 3)</small></h3>
		                	<?php 
		               			
		               				if(isset($_SESSION['errorInquilino']) && $_SESSION['errorInquilino'] == TRUE){
										
										unset($_SESSION['errorInquilino']);
											
		               					echo "<div class='row'>
										  		<div class='col-sm-1'></div>
										  		<div class='col-sm-10 text-left alert alert-success alert-dismissable'>
								               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 							<strong><i class='fa fa-exclamation-circle fa-lg'></i></strong>
						 							Debe añadir al menos un inquilino para finalizar el registro
			                					</div>
			                					<div class='col-sm-1'></div>
										  </div>";
										
		               				}
		               			
		               		?>
		               		<form method="post" action="../../controladores/control_registro_inquilino.php?inq=TRUE">
		               			
		               			<!--------------------------------------------------------Inqulino insertado----------------------->
		               			<?php
		                				                	 
			                		if(!empty($_SESSION['ArrayIdUsuario'])){
			                			
										foreach ($_SESSION['ArrayIdUsuario'] as $key => $value) {
												
											echo get_inquilino($value);
											
										}				
										
																											
									}
									
			                	?>
		               			<!--------------------------------------------------------Inqulino insertado----------------------->
		               			
		               			
		               			
		               			<!--------------------------------------------------------Añadir inqulino----------------------->	 	
		                       <div class="row fondogris">
									<div class="row">  
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta">Datos del inquilino&nbsp;&nbsp;</h6></label>
										  </div>
									</div>
									<div class="row-fluid">  
											  <div class="col-sm-6">
											  			<input type="text" class="form-control" name="nombre_inquilino" placeholder="Nombre *" />
								                        <input type="text" class="form-control" name="apellidos_inquilino" placeholder="Apellidos *" /> 
								                        <input type="text" class="form-control" name="dni_inquilino" placeholder="DNI *" />
								                        <input type="text" class="form-control" name="email_inquilino" placeholder="Email *" /> 
								                        <input type="text" class="form-control" name="telefono_inquilino" placeholder="Teléfono *" /> 
                        								<small>* Campos obligatorios</small>
											  </div>
									</div>  
								</div>
								<!--------------------------------------------------------Fin Añadir inquilino----------------------->	
								
								
								<!-------------------------------------------------------- Fin Insertar habitacion----------------------->
		                        <br/>
		                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Añadir inquilino</button>
		                        <a   href="../../controladores/control_registro_inquilino.php?inq=FALSE" class="btn btn-primary btn-sm">Finalizar</a>
		                        								
		                    </form>
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