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
                <div class="col-xs-9 columnadcha">
                	<div class="row-fluid">
                		<div class="col-sm-5">
		                	<h3>Añadir inmueble</h3>
		               		 <form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">  		               		 	                                 
		                       <label><h6 class="magenta">Tipo de inmueble&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="tipoInmueble">
									  <option value="Vivienda">Vivienda</option>
									  <option value="Local_comercial">Local comercial</option>
									  <option value="Garaje">Garaje</option>
									  <option value="Finca Rustica">Finca rústica</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Dirección&nbsp;&nbsp;</h6></label><br/>
		                        	<select class="selector" name="via_inmueble">
									  <option value="Calle">Calle</option>
									  <option value="Avenida">Avenida</option>
									  <option value="Camino">Camino</option>
									  <option value="Pasaje">Pasaje</option>
									  <option value="Plaza">Plaza</option>
									</select>
									<br/><br/>  
									<input type="text" class="form-control" name="nombre_inmueble" placeholder="Nombre" />                               
			                        <input type="text" class="form-control" name="num_inmueble" placeholder="Número" />
			                        <input type="text" class="form-control" name="piso_inmueble" placeholder="Piso / Puerta" />
			                        <input type="text" class="form-control" name="municipio_inmueble" placeholder="Municipio" />                                   
			                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal" />
			                        <input type="text" class="form-control" name="provincia_inmueble" placeholder="Provincia" /> 
		                        <hr class="inmueble"/>
		                        <label><h6 class="magenta">Nº de metros&nbsp;&nbsp;</h6></label> 
			                        <input type="text" class="form-control" name="metros_inmueble" placeholder="Metros" />
		                        <hr class="inmueble"/>
		                        <label><h6 class="magenta">Nº de habitaciones&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_habitaciones">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="magenta">Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_aseos">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>  
		                        <br/>
		    					<a data-toggle="modal" href="#myModal" class="enlace">
		    					<button type="button" class="btn btn-primary btn-sm">Continuar</button>
		    					</a>    					   					
							    <div class="modal fade" id="myModal">
							        <div class="modal-dialog">
							          <div class="modal-content">
							            <div class="modal-header">
							              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							              <h5 class="modal-title">Revise sus datos antes de continuar:</h5>
							            </div>
							            <div class="modal-body">
							            	<p>¿Te gusta el adobo? Pues vamos al lío...</p>  					            	
							            </div>
							            <div class="modal-footer">
							            	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancelar</button>
							              <button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
							          </div>
							        </div>
							      </div>
		    					</div>				
		                    </form>
		                    
		                    <ul class="pagination pagination-sm">
								  <li class="active"><a>1</a></li>
								  <li><a>2</a></li>
								  <li><a>3</a></li>
							</ul>
		               </div>
		               
		               <div class="col-sm-7 text-left"></div>    	              
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>