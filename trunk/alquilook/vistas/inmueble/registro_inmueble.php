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
                <div class="col-xs-10">
                		<h3><i class="fa fa-cogs"></i> Tipo de contrato y datos de su inmueble (Paso 1 de 3)</h3>
                			<div class="row">
                				<div class="col-sm-6">
									<div class="text-left alert alert-success alert-dismissable">
						               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 							<h4><i class="fa fa-info-circle fa-lg"></i> Elija la modalidad de contrato que más le interese<br/> y registre su inmueble e inquilino en 3 sencillos pasos.</h4>
				                	</div>
				                </div>
				            </div>
				            <div class="row">   	
			                	<form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">	
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i> Básico</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">5
						                            <span class="price-cents">%</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                        <li class="list-group-item">5 min. de gloryhole</li>
						                        <li class="list-group-item">100 grs. de adobo</li>
						                        <li class="list-group-item">100 MB para youporn.com</li>
						                        <li class="list-group-item"><a class="enlace" href="../publico/condiciones.php"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <li class="list-group-item"> <h4><input type="radio" name="radiogroup" value="1" />&nbsp;&nbsp; Acepto</h4></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i><i class="fa fa-star"></i> Medio</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">7
						                            <span class="price-cents">%</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                       <li class="list-group-item">10 min. de gloryhole</li>
						                        <li class="list-group-item">250 grs. de adobo</li>
						                        <li class="list-group-item">300 MB para youporn.com</li>
						                        <li class="list-group-item"><a class="enlace" href="../publico/condiciones.php"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <li class="list-group-item"> <h4><input type="radio" name="radiogroup" value="2" />&nbsp;&nbsp; Acepto</h4></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> Premium</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">10
						                            <span class="price-cents">%</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                        <li class="list-group-item">15 min. de gloryhole</li>
						                        <li class="list-group-item">500 grs. de adobo</li>
						                        <li class="list-group-item">1 GB para youporn.com</li>
						                        <li class="list-group-item"><a class="enlace" href="../publico/condiciones.php"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <li class="list-group-item"> <h4><input type="radio" name="radiogroup" value="3" />&nbsp;&nbsp; Acepto</h4></li>
						                    </ul>
						                </div>
			            			</div>
			            		</form>	
                	</div>
                	<br/>	
		                	<div class="row-fluid">
		                	<div class="col-sm-12">
		               		 <form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">  		               		 	                                 
		                       <label><h6 class="magenta">Tipo de inmueble&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="tipoInmueble">
									  <option value="Vivienda">Vivienda</option>
									  <option value="Local_comercial">Local comercial</option>
									  <option value="Garaje">Garaje</option>
									  <option value="Finca Rustica">Finca rústica</option>
									</select>
		                        <br/> 
		                        <label><h6 class="magenta">Dirección&nbsp;&nbsp;</h6></label>
		                        	<select class="selector" name="via_inmueble">
									  <option value="Calle">Calle</option>
									  <option value="Avenida">Avenida</option>
									  <option value="Camino">Camino</option>
									  <option value="Pasaje">Pasaje</option>
									  <option value="Plaza">Plaza</option>
									</select>
									<br/>  
									<input type="text" class="form-control" name="nombre_inmueble" placeholder="Nombre" />                               
			                        <input type="text" class="form-control" name="num_inmueble" placeholder="Número" />
			                        <input type="text" class="form-control" name="piso_inmueble" placeholder="Piso / Puerta" />
			                        <input type="text" class="form-control" name="municipio_inmueble" placeholder="Municipio" />                                   
			                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal" />
			                        <input type="text" class="form-control" name="provincia_inmueble" placeholder="Provincia" /> 
		                         <br/>
		                        <label><h6 class="magenta">Nº de metros&nbsp;&nbsp;</h6></label> 
			                        <input type="text" class="form-control" name="metros_inmueble" placeholder="Metros" />
		                         <br/>
		                        <label><h6 class="magenta">Nº de habitaciones&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_habitaciones">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
		                         <br/>
		                        <label><h6 class="magenta">Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_aseos">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>  
		                        <br/><br/>
		    					<button type="submit" class="btn btn-primary btn-sm">Continuar</button>
		                    </form>
		                    <br/><br/>
		                    </div>
		                    </div>  	              
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div> 
    </div> 
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>