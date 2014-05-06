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

    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
        	<div class="row">&nbsp;</div>
            <div class="row">
            	<div class="col-md-4 col-xs-2 text-center"></div>
                <div class="col-md-4 col-xs-8 text-left">
                	<h4>Crear una cuenta</h4>
               		 <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php" >                                    
                        <input type="text" class="form-control" id="usuario" name="usuario_propietario" placeholder="Usuario *" />                                    
                        <input type="password" class="form-control" id="pass" name="pass_propietario" placeholder="Contraseña *" />
                        <input type="email" class="form-control" id="email" name="email_propietario" placeholder="Email *" /> 
                        <input type="text" class="form-control" id="nombre" name="nombre_propietario" placeholder="Nombre *" />
                        <input type="text" class="form-control" id="apellidos" name="apellidos_propietario" placeholder="Apellidos *" /> 
                        <input type="text" class="form-control" id="dni" name="dni_propietario" placeholder="DNI *" />
                        <input type="tel" class="form-control" id="telefono" name="telefono_propietario" placeholder="Teléfono *" /> 
                        <input type="text" class="form-control" id="domicilio" name="domicilio_propietario" placeholder="Domicilio del propietario *" />
                        <input type="text" class="form-control" id="cp" name="cp_propietario" placeholder="CP *" /> 
                        <input type="text" class="form-control" id="poblacion" name="poblacion_propietario" placeholder="Población *" />
                        <input type="text" class="form-control" id="provincia" name="provincia_propietario" placeholder="Provincia *" />                       
                        <small>* Campos obligatorios</small>
                        <br/><br/>
                        <label>
      						<input type="checkbox" value="ok" name="aceptaCondiciones"> Acepto las <a data-toggle="modal" href="#myModal" target="_blank" class="enlace">Condiciones de Alquilook.</a>
    					</label>
    					<br/><br/>				   					
					    <div class="modal fade" id="myModal">
					        <div class="modal-dialog">
					          <div class="modal-content">
					            <div class="modal-header">
					              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					              <h5 class="modal-title">Revise sus datos antes de continuar:</h5>
					            </div>
					            <div class="modal-body">
					            	<p><small>1. ¿A ti en la claridad de la mañana, que te gusta más, los churritos o las porritas?</small> </p> 
									<p><small>2. ¿Te gusta más el adobo? Pues vamos al lío...</small> </p> 	
									<p><small>3. ¿Tienes las papilas gustativas anuladas de tanto beber Viakal?</small> </p> 				            	
					            </div>
					            <div class="modal-footer">
					            	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button>
					          </div>
					        </div>
					      </div>
    					</div>
    					<input type="submit" class="btn btn-primary btn-sm" value="Continuar" />
                    </form> 
                </div>
                <div class="col-md-4 col-xs-2 text-center"></div>                                            
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