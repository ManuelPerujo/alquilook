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
					
					$IdInmueble = $_GET['idInmueble'];
					
					$direccion = $_SERVER['HTTP_REFERER'];
					
    			?> 
                
                
              <div class="col-sm-10 col-xs-12">
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-key"></i> Añadir Inqulino</h3>
		                			<br/>
		                		</div>
		            </div>
		            <div class="row">
		                <div class="col-sm-5 col-xs-12">
		               		 <form method="post" action="../../controladores/control_add_inquilino.php">
		               		 	<input type="hidden" value="<?php echo $direccion; ?>" name="direccion" />
		               		 	<input type="hidden" value="<?php echo $IdInmueble; ?>" name="idInmueble" />
			               		<input type="text" class="form-control" name="nombre_inquilino" placeholder="Nombre *" />
								<input type="text" class="form-control" name="apellidos_inquilino" placeholder="Apellidos *" /> 
								<input type="text" class="form-control" name="dni_inquilino" placeholder="DNI *" />
								<input type="text" class="form-control" name="email_inquilino" placeholder="Email *" /> 
								<input type="text" class="form-control" name="telefono_inquilino" placeholder="Teléfono *" /> 
                        		<small>* Campos obligatorios</small>
		                        <br/><br/>
		                        <button type="submit" class="btn btn-default btn-sm">Aceptar</button>
		                    </form>
		                    <br/><br/>
		                </div>
		                <div class="col-md-4 col-xs-2 text-center"></div>                                            
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