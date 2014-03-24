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
                	<div class="row-fluid">
                		<div class="col-sm-8">
                			<div class="row-fluid">
			                	<div class="col-sm-12">
			                		<h3><i class="fa fa-cogs"></i> Crear inmueble<small class="magenta"> (Paso 1 de 3)</small></h3>
			                	</div>
			                	<div class="col-sm-12 text-left alert alert-success alert-dismissable">
				               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		 							<strong><i class="fa fa-exclamation-circle fa-lg"></i></strong> 
		 							Siga 3 sencillos pasos para crear su inmueble con sus características y su inquilino.
			                	</div>
			                </div>	
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
		                        <hr class="inmueble"/> 
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
		                        <br/><br/>
		    					<button type="submit" class="btn btn-primary btn-sm">Continuar</button>
		                    </form>
		                    <br/><br/>
		                    </div>
		                    </div>
		               </div>
		               <div class="col-sm-4"></div>    	              
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