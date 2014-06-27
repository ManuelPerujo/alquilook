<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_inmo.php';
    ?>      



	 <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
            	<?php
        			include_once '../panel/panel_inmobiliaria.php';
    			?> 
                
               <div class="col-xs-10">
               	
               			<?php 
        	
			        		if(isset($_SESSION['error']) && $_SESSION['error'] != null){
								
								$mensaje = $_SESSION['error'];
								
								unset($_SESSION['error']);
																			
								echo "<div class='row'>
								 		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
												<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;".$mensaje."</h5>
					               		</div>
									  </div>";
														
				            }
			        	
			        	?>
			        	
                		<h3><i class="fa fa-home"></i> Datos de su inmueble y tipo de contrato (Paso 2 de 4)</h3>
                			<div class="row">   	
			                	<form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">
			                		
			                			<div class="col-xs-12">
							                		<label><h5 class="gris">Inserte los datos de su inmueble:</h5></label>
							            </div>
					                	<div class="col-xs-12">		               		 	                                 
					                       <label><h6 class="negro">Tipo de inmueble&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="tipoInmueble">
												  <option value="Vivienda">Vivienda</option>
												  <option value="Local_comercial">Local comercial</option>
												  <option value="Garaje">Garaje</option>
												  <option value="Finca Rustica">Finca rústica</option>
												</select>
					                        <br/> 
					                        <label><h6 class="negro">Dirección&nbsp;&nbsp;</h6></label>
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
						                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal" /><br/>
						                     <label><h6 class="negro">Provincia&nbsp;&nbsp;</h6></label> 
						                        <select name="provincia_inmueble">
													 <option value='Álava'>Álava</option>
													 <option value='Albacete'>Albacete</option>
													 <option value='Alicante'>Alicante/Alacant</option>
													 <option value='Almería'>Almería</option>
													 <option value='Asturias'>Asturias</option>
													 <option value='Ávila'>Ávila</option>
													 <option value='Badajoz'>Badajoz</option>
													 <option value='Barcelona'>Barcelona</option>
													 <option value='Burgos'>Burgos</option>
													 <option value='Cáceres'>Cáceres</option>
													 <option value='Cádiz'>Cádiz</option>
													 <option value='Cantabria'>Cantabria</option>
													 <option value='Castellón'>Castellón/Castelló</option>
													 <option value='Ceuta'>Ceuta</option>
													 <option value='Ciudad Real'>Ciudad Real</option>
													 <option value='Córdoba'>Córdoba</option>
													 <option value='Cuenca'>Cuenca</option>
													 <option value='Girona'>Girona</option>
													 <option value='Las Palmas'>Las Palmas</option>
													 <option value='Granada'>Granada</option>
													 <option value='Guadalajara'>Guadalajara</option>
													 <option value='Guipuzcoa'>Guipúzcoa</option>
													 <option value='Huelva'>Huelva</option>
													 <option value='Huesca'>Huesca</option>
													 <option value='Illes Balears'>Illes Balears</option>
													 <option value='Jaén'>Jaén</option>
													 <option value='A Coruña'>A Coruña</option>
													 <option value='La Rioja'>La Rioja</option>
													 <option value='León'>León</option>
													 <option value='Lleida'>Lleida</option>
													 <option value='Lugo'>Lugo</option>
													 <option value='Madrid'>Madrid</option>
													 <option value='Málaga'>Málaga</option>
													 <option value='Melilla'>Melilla</option>
													 <option value='Murcia'>Murcia</option>
													 <option value='Navarra'>Navarra</option>
													 <option value='Ourense'>Ourense</option>
													 <option value='Palencia'>Palencia</option>
													 <option value='Pontevedra'>Pontevedra</option>
													 <option value='Salamanca'>Salamanca</option>
													 <option value='Segovia'>Segovia</option>
													 <option value='Sevilla'>Sevilla</option>
													 <option value='Soria'>Soria</option>
													 <option value='Tarragona'>Tarragona</option>
													 <option value='Santa Cruz de Tenerife'>Santa Cruz de Tenerife</option>
													 <option value='Teruel'>Teruel</option>
													 <option value='Toledo'>Toledo</option>
													 <option value='Valencia'>Valencia/Valéncia</option>
													 <option value='Valladolid'>Valladolid</option>
													 <option value='Vizcaya'>Vizcaya</option>
													 <option value='Zamora'>Zamora</option>
													 <option value='Zaragoza'>Zaragoza</option>
												</select>
					                         <br/>
					                        
					                        <label><h6 class="negro">Nº de habitaciones&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="numero_habitaciones">
						                          <option value="0">0</option>	
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												  <option value="4">4</option>
												  <option value="5">5</option>
												</select>
					                         <br/>
					                        <label><h6 class="negro">Nº de aseos&nbsp;&nbsp;</h6></label> 
						                        <select class="selector" name="numero_aseos">
						                          <option value="0">0</option>
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												</select>  
					                        <br/>
					                         <label><h6 class="negro">¿Qué suministros quiere que le gestione Alquilook?</h6></label><br>
						                        <input type="checkbox" name="luz" value="1">&nbsp;Luz&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="agua" value="1">&nbsp;Agua&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="checkbox" name="gas" value="1">&nbsp;Gas
					                        <br/><br/>
					                       </div>
		                        	<hr class="grissimple" />	
		                       		<div class="col-xs-12">
						                		<label><h5 class="gris">Inserte los m<sup>2</sup> y el precio en euros del alquiler de su inmueble:&nbsp;&nbsp;</h5></label><br />
						                		
						                		<label><h6 class="negro">Nº de m<sup>2</sup>&nbsp;&nbsp;</h6></label> 
						                		<input type="text" size="11" class="form-control" name="metros_inmueble" placeholder="0 metros" />
						                		<br/>
						                		<label><h6 class="negro">€ / mes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h6></label> 
						                		<input type="text" size="11" class="form-control" name="mensualidad" id="mensualidad" placeholder="000.00 €" onchange="multiplicar();"/>
						                		&nbsp;&nbsp;<button type="button" class="btn btn-default btn-sm margenok">OK</button>
						                        <br/>
				                	</div>	
				                	<hr class="grissimple" />
				                	<div class="col-xs-12">
				                		<label><h5 class="gris">Elija el tipo de contrato que más le interese:</h5></label>
				                	</div>	
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong>PLAN "MINI"</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h2 class="panel-title" ><input style="width:40%; border: none;" placeholder="00.0" id="precio1"/>€&nbsp;/<small class="negro">&nbsp;mes</small></h2>
						                    </div>
						                    <ul class="list-group text-left">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/planes.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Mini" />&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong>PLAN "ESTÁNDAR"</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h2 class="panel-title" ><input style="width:40%; border: none;" placeholder="00.0" id="precio2"/>€&nbsp;/<small class="negro">&nbsp;mes</small></h2>
						                    </div>
						                    <ul class="list-group text-left">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item rojo"><i class="fa fa-times"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/planes.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Estándar" checked/>&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
			                		<div class="col-sm-3">
						                <div class="panel panel-default text-center">
						                    <div class="panel-heading mayusculas">
						                        <strong>PLAN "PREMIUM"</strong>
						                    </div>
						                    <div class="panel-body">
						                        <h2 class="panel-title" ><input style="width:40%; border: none;" placeholder="00.0" id="precio3"/>€&nbsp;/<small class="negro">&nbsp;mes</small></h2>
						                    </div>
						                    <ul class="list-group text-left">
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Gestión completa del Alquiler</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Servicio de Defensa Jurídica</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Garantías por pérdidas Económicas</li>
						                        <li class="list-group-item verde"><i class="fa fa-check"></i> Coberturas de un Seguro de Hogar</li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"><a class="enlace2" href="../publico/planes.php" target="_blank"><i class="fa fa-gavel"></i>&nbsp;Ver condiciones</a></li>
						                        <hr class="grissimple" />
						                        <li class="list-group-item"> <h5><input type="radio" name="tipoContrato" value="Premium" />&nbsp;&nbsp; Elijo éste</h5></li>
						                    </ul>
						                </div>
			            			</div>
			            			<br/>
		                        	<div class="col-xs-12">
		                        		<input type="submit" class="btn btn-default btn-sm" value="Continuar" />
		                        		<br/><br/>
		                        	</div>
		    					
		    				</form>
		                    
		                    </div>  	              
                </div> 
            
            </div>
        </div>
    </div> 
    </div> 
  
   <?php
        include_once '../../plantillas/pie_inmo.php';
    ?>        
    
</body>
</html>