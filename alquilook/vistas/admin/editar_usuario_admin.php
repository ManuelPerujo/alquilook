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
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
               <div class="col-sm-10 col-xs-12">
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-user"></i> Perfil usuario</h3>
		                		</div>
		            </div>
		            <hr class="grisdoble"/>
		            <div class="row">
                	    		<div class="col-xs-12">
		                			<h4><i class="fa fa-pencil"></i> Editar usuario</h4>
		                		</div>
		            </div>
		           <div class="row">
		                <div class="col-sm-5 col-xs-12">
		               		 <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php" onsubmit="validacion_registro_propietario();">                                    
		                        <input type="text" class="form-control" name="usuario_propietario" placeholder="Usuario *" />                                    
		                        <input type="password" class="form-control" name="pass_propietario" placeholder="Contraseña *" />
		                        <input type="email" class="form-control" name="email_propietario" placeholder="Email *" /> 
		                        <input type="text" class="form-control" id="nombre" name="nombre_propietario" placeholder="Nombre *" />
		                        <input type="text" class="form-control" name="apellidos_propietario" placeholder="Apellidos *" /> 
		                        <input type="text" class="form-control" name="dni_propietario" placeholder="DNI *" />
		                        <input type="text" class="form-control" name="telefono_propietario" placeholder="Teléfono *" /> 
		                        <input type="text" class="form-control" name="domicilio_propietario" placeholder="Domicilio *" />
		                        <input type="text" class="form-control" name="cp_propietario" placeholder="CP *" /> 
		                        <input type="text" class="form-control" name="poblacion_propietario" placeholder="Poblacion *" />
		                        <input type="text" class="form-control" name="provincia_propietario" placeholder="Provincia *" />                       
		                        <small>* Campos obligatorios</small>
		                        <br/><br/>
		    					<button type="submit" class="btn btn-default btn-sm">Guardar</button>
		    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    					<a class="btn btn-default btn-sm" href="<?php echo $ruta?>vistas/admin/perfil_usuario_admin.php">Volver al perfil</a>
		                    </form> 
		                    <br/>
		                </div>                                           
            		</div>
                	
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>