<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
  <!-------------------------------------------------------------------------------------------------------------------------------Banner propietario--------------------->

	 <div class="section-colored">
        <div class="container">
            <div class="row">
            	<div class="col-sm-2 text-center"></div>
                <div class="col-sm-2 text-center">
                	<img class="imagenbanner" src="<?php echo $ruta?>img/propietario.png">
                </div>     
                <div class="col-sm-4 text-center">
                	<hr/>
                	<h2 class="banner">SOY PROPIETARIO</h2>
                	<hr/>
                </div> 
                <div class="col-sm-4"></div>                                                       	            	
			</div>
		</div>
	</div>	
	<!-------------------------------------------------------------------------------------------------------------------------------Banner propietario--------------------->
    

    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
        	<div class="row">&nbsp;</div>
            <div class="row">
            	<div class="col-md-4 col-sm-4 text-center"></div>
                <div class="col-md-4 col-sm-4 text-left">
                	<h4>Crear una cuenta</h4>
               		 <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php">                                    
                        <input type="text" class="form-control" name="usuario_propietario" placeholder="Usuario" /> 
                        <br/>                                    
                        <input type="password" class="form-control" name="pass_propietario" placeholder="Contraseña" />
                        <br/>  
                        <input type="text" class="form-control" name="email_propietario" placeholder="Email" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="nombre_propietario" placeholder="Nombre" />
                        <br/>
                        <input type="text" class="form-control" name="apellidos_propietario" placeholder="Apellidos" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="dni_propietario" placeholder="DNI" />
                        <br/>
                        <input type="text" class="form-control" name="telefono_propietario" placeholder="Teléfono" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="domicilio_propietario" placeholder="Domicilio" />
                        <br/>
                        <input type="text" class="form-control" name="cp_propietario" placeholder="CP" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="poblacion_propietario" placeholder="Poblacion" />
                        <br/>
                        <input type="text" class="form-control" name="provincia_propietario" placeholder="Provincia" />
                        <br/>
                        <label>
      						<input type="checkbox"> Acepto las <a class="enlace" href="<?php echo $ruta?>vistas/publico/condiciones.php">Condiciones de Alquilook</a>
    					</label>
                        <br/><br/>
                        <input type="submit" class="btn btn-primary btn-sm"></input>
                    </form> 
                </div>
                <div class="col-md-4 col-sm-4 text-center"></div>                                            
            </div>
            <div class="row">&nbsp;</div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>