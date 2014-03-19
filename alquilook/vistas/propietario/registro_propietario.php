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
               		 <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php">                                    
                        <input type="text" class="form-control" name="usuario_propietario" placeholder="Usuario *" /> 
                        <br/>                                    
                        <input type="password" class="form-control" name="pass_propietario" placeholder="Contraseña *" />
                        <br/>  
                        <input type="text" class="form-control" name="email_propietario" placeholder="Email *" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="nombre_propietario" placeholder="Nombre *" />
                        <br/>
                        <input type="text" class="form-control" name="apellidos_propietario" placeholder="Apellidos *" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="dni_propietario" placeholder="DNI *" />
                        <br/>
                        <input type="text" class="form-control" name="telefono_propietario" placeholder="Teléfono *" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="domicilio_propietario" placeholder="Domicilio *" />
                        <br/>
                        <input type="text" class="form-control" name="cp_propietario" placeholder="CP *" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="poblacion_propietario" placeholder="Poblacion *" />
                        <br/>
                        <input type="text" class="form-control" name="provincia_propietario" placeholder="Provincia *" />                       
                        <small>* Campos obligatorios</small>
                        <br/><br/>
                        <label>
      						<input type="checkbox"> Acepto las <a data-toggle="modal" href="#myModal" class="enlace">Condiciones de Alquilook.</a>
    					</label>    					   					
					    <div class="modal fade" id="myModal">
					        <div class="modal-dialog">
					          <div class="modal-content">
					            <div class="modal-header">
					              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					              <h5 class="modal-title">CONDICIONES DE USO DE ALQUILOOK:</h5>
					            </div>
					            <div class="modal-body">
					            	<p><small>1. Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.
					            	</small></p>  
					            	<p><small>2. Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo.tur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.
					            	</small></p> 
					            	<p><small>3. Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.
					            	</small></p>  					            	
					            </div>
					            <div class="modal-footer">
					              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cerrar</button>
					          </div>
					        </div>
					      </div>
    					</div>
    					
                        <br/><br/>
                        <input type="submit" class="btn btn-primary btn-sm"></input>
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