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
			                	<form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">
			                		<div class="col-xs-12">
				                		<label><h5 class="gris">Inserte el precio en euros del alquiler de su inmueble:&nbsp;&nbsp;</h5></label><br />
				                		<input type="text" class="form-control" name="" placeholder="000,00" />	
				                		<br />
				                	</div>	
				                	<hr class="grissimple" />
				                	<div class="col-xs-12">
				                		<label><h5 class="gris">Elija el tipo de contrato que más le interese:</h5></label>
				                	</div>	
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i> MINI</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">X
						                            <span class="price-cents">€</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/condiciones.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Básico" />&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i><i class="fa fa-star"></i> ESTÁNDAR</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">X
						                            <span class="price-cents">€</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/condiciones.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Medio" />&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> PREMIUM</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h3 class="panel-title price">X
						                            <span class="price-cents">€</span>
						                            <span class="price-month">mes</span>
						                        </h3>
						                    </div>
						                    <ul class="list-group">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/condiciones.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Premium" />&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
                			<br/>	
                			<hr class="grissimple" />
                			<div class="col-xs-12">
				                		<label><h5 class="gris">Inserte los datos de su inmueble:</h5></label>
				            </div>
		                	<div class="col-sm-12">		               		 	                                 
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
			                          <option value="0">0</option>	
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
		                         <br/>
		                        <label><h6 class="magenta">Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_aseos">
			                          <option value="0">0</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>  
		                        <br/>
		                         <label><h6 class="magenta">¿Qué suministros quiere que le gestione Alquilook?</h6></label><br>
			                        <input type="checkbox" name="" value="">&nbsp;&nbsp;Luz<br>
									<input type="checkbox" name="" value="">&nbsp;&nbsp;Agua<br/>
									<input type="checkbox" name="" value="">&nbsp;&nbsp;Gas
		                        <br/><br/>
		    					<button type="submit" class="btn btn-primary btn-sm">Continuar</button>
		                    </form>
		                    <br/><br/>
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