<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/admin.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_inmo.php';
    ?>      



<div class="section">
        <div class="container">
            <div class="row">
            	
                <?php
        			include_once '../panel/panel_inmobiliaria.php';
    			?> 
    			
                
                <div class="col-xs-10">
                	<div class="row">	
                	    <div class="col-sm-6">
                	    	<div class="row">
                	    		<div class="col-xs-12">
		                			<h3><i class="fa fa-user"></i> Registro del Propietario (Paso 1 de 4) </h3>
		                		</div>
		                	</div>

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
			      						<input type="checkbox" value="ok" name="aceptaCondiciones"> Acepto las <a data-toggle="modal" href="#myModal" target="_blank" class="enlace3">Condiciones de Alquilook.</a>
			    					</label>
			    					<br/><br/>				   					
								    <div class="modal fade" id="myModal">
								        <div class="modal-dialog">
								          <div class="modal-content">
								            <div class="modal-header">
								              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								              <h5 class="modal-title">Condiciones de contratar con Alquilook:</h5>
								            </div>
								            <div class="modal-body">
								            	<p>
								            		<small>
								            			1. Vis prodesset adolescens adipiscing te, usu mazim perfecto recteque at, assum putant erroribus mea in. Vel facete imperdiet id, cum an libris luptatum perfecto, vel fabellas inciderint ut. Veri facete debitis ea vis, ut eos oratio erroribus. Sint facete perfecto no vel, vim id omnium insolens. Vel dolores perfecto pertinacia ut, te mel meis ullum dicam, eos assum facilis corpora in.
								            		</small>
								            	</p> 	
								            	<p>
								            		<small>
								            			2. Eum hinc argumentum te, no sit percipit adversarium, ne qui feugiat persecuti. Odio omnes scripserit ad est, ut vidit lorem maiestatis his, putent mandamus gloriatur ne pro. Oratio iriure rationibus ne his, ad est corrumpit splendide. Ad duo appareat moderatius, ei falli tollit denique eos. Dicant evertitur mei in, ne his deserunt perpetua sententiae, ea sea omnes similique vituperatoribus. Ex mel errem intellegebat comprehensam, vel ad tantas antiopam delicatissimi, tota ferri affert eu nec. Legere expetenda pertinacia ne pro, et pro impetus persius assueverit.
								            		</small>
								            	</p> 
								            	<p>
								            		<small>
								            			3. Id vel sensibus honestatis omittantur, vel cu nobis commune patrioque. In accusata definiebas qui, id tale malorum dolorem sed, solum clita phaedrum ne his. Eos mutat ullum forensibus ex, wisi perfecto urbanitas cu eam, no vis dicunt impetus. Assum novum in pri, vix an suavitate moderatius, id has reformidans referrentur. Elit inciderint omittantur duo ut, dicit democritum signiferumque eu est, ad suscipit delectus mandamus duo. An harum equidem maiestatis nec.
								            		</small>
								            	</p> 
								            	<p>
								            		<small>
								            			4. Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut fugit veritus placerat per.
								            		</small>
								            	</p> 			            	
								            </div>
								            <div class="modal-footer">
								            	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Lo acepto</button>
								          </div>
								        </div>
								      </div>
			    					</div>
			    					<input type="submit" class="btn btn-default btn-sm" value="Continuar" />
			    					<br/><br/>
			                    </form> 
                </div>                                           
            </div>
        </div>
    </div>  
</div>
    </div>      
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>