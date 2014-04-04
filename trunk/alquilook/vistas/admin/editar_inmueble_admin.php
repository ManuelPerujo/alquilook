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
		                			<h3><i class="fa fa-home"></i> Inmueble</h3>
		                			<hr class="grisdoble"/>
		                		</div>
		            </div>
		            <div class="row">
                	    		<div class="col-xs-12">
		                			<h4><i class="fa fa-pencil"></i> Editar inmueble - (Paso 1 de 3)</h4>
		                		</div>
		            </div>
		           <div class="row-fluid">
		                	<div class="col-sm-10 col-xs-12">
		               		 <form class="form-inline text-left" method="post" action="../../controladores/control_registro_inmueble.php">  		               		 	                                 
		                       <label><h6>Tipo de inmueble&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="tipoInmueble">
									  <option value="Vivienda">Vivienda</option>
									  <option value="Local_comercial">Local comercial</option>
									  <option value="Garaje">Garaje</option>
									  <option value="Finca Rustica">Finca rústica</option>
									</select>
		                        <br/> 
		                        <label><h6>Dirección&nbsp;&nbsp;</h6></label>
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
		                        <label><h6>Nº de metros&nbsp;&nbsp;</h6></label> 
			                        <input type="text" class="form-control" name="metros_inmueble" placeholder="Metros" />
		                         <br/>
		                        <label><h6>Nº de habitaciones&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_habitaciones">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
		                         <br/>
		                        <label><h6>Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_aseos">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>  
		                        <br/><br/>
		    					<button type="submit" class="btn btn-default btn-sm">Continuar</button>
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