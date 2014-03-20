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
                		<div class="col-sm-5 text-left">
		                	<h3>Añadir inmueble</h3>
		               		 <form class="form-inline text-left" method="post" action="">  		               		 	                                 
		                       <label><h6 class="columnapropietario">Tipo de inmueble *&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="tipoInmueble">
									  <option value="vivienda">Vivienda</option>
									  <option value="local_comercial">Local comercial</option>
									  <option value="garaje">Garaje</option>
									  <option value="finca_rustica">Finca rústica</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Dirección *&nbsp;&nbsp;</h6></label><br/>                                   
			                        <input type="text" class="form-control" name="calle_inmueble" placeholder="Calle y número" />
			                        <input type="text" class="form-control" name="municipio_inmueble" placeholder="Municipio" />                                   
			                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal" />
			                        <input type="text" class="form-control" name="provincia_inmueble" placeholder="Provincia" /> 
		                        <hr class="inmueble"/>
		                        <label><h6 class="columnapropietario">Nº de habitaciones *&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_habitaciones">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Nº de aseos *&nbsp;&nbsp;</h6></label> 
			                        <select class="selector" name="numero_aseos">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>  
		                        <br/>                     
		                        <small>* Campos obligatorios</small>  
		                        <br/><br/>
		                        <ul class="pagination">
								  <li class="active"><a href="#">Paso 1</a></li>
								  <li><a href="#">Paso 2</a></li>
								  <li><a href="#">Paso 3</a></li>
								</ul>
		                    </form>
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