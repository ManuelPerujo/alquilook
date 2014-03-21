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
		                	<h3><i class="fa fa-cogs"></i> Crear inquilinos<small class="magenta"> (Paso 3 de 3)</small></h3>
		               		<form method="post" action="">
		               			
		               			<!--------------------------------------------------------Añadir inqulino----------------------->	 	
		                       <div class="row columnadcha">
									<div class="row">  
										  <div class="col-xs-12">
										  	 <label><h6 class="magenta">Datos del inquilino&nbsp;&nbsp;</h6></label>
										  </div>
									</div>
									<div class="row-fluid">  
											  <div class="col-sm-6">
											  			<input type="text" class="form-control" name="nombre_propietario" placeholder="Nombre *" />
								                        <input type="text" class="form-control" name="apellidos_propietario" placeholder="Apellidos *" /> 
								                        <input type="text" class="form-control" name="dni_propietario" placeholder="DNI *" />
								                        <input type="text" class="form-control" name="email_propietario" placeholder="Email *" /> 
								                        <input type="text" class="form-control" name="telefono_propietario" placeholder="Teléfono *" /> 
                        								<small>* Campos obligatorios</small>
											  </div>
									</div>  
								</div>
								<!--------------------------------------------------------Fin Añadir inquilino----------------------->	
								
								
								<!-------------------------------------------------------- Fin Insertar habitacion----------------------->
		                        <br/>
		                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Añadir inquilino</button>
		                        <button type="submit" class="btn btn-primary btn-sm">Finalizar</button>
		                        								
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