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
            	<!--------------------------------------------------------Columna Izda----------------------->
                <div class="col-xs-3 text-center columnaizda">
                	<br/>
                	<h5 class="columnapropietario"><i class="fa fa-user"></i> hola Juan</h5>
                	<hr class="propietario"/>
                	               		
                    <a class="imagenboton" href="#"><img class="imagenboton" src="<?php echo $ruta?>img/mas_inm_pro.png"></a>
                    <h5 class="columnapropietario">Añadir inmueble</h5>
                    
                    <br/>	
                    <a class="imagenboton" href="#"><img class="imagenboton" src="<?php echo $ruta?>img/ver_inm_pro.png"></a>
                    <h5 class="columnapropietario">Ver inmuebles</h5>
                    
                    <hr class="propietario"/>
                    
                    <a class="imagenboton2" href="#"><img class="imagenboton2" src="<?php echo $ruta?>img/salir.png"></a>
                    <h6 class="columnapropietario">Salir</h6>
                    
                    <a class="imagenboton2" href="#"><img class="imagenboton2" src="<?php echo $ruta?>img/mensaje.png"></a>
                    <h6 class="columnapropietario">Mensajes</h6>
                  
                </div>
                <!--------------------------------------------------------Columna Izda----------------------->
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-9 columnadcha">
                	<div class="row-fluid">
                		<div class="col-sm-5 text-left">
		                	<h3>Añadir Inmueble</h3>
		               		 <form class="form-inline text-left" method="post" action="">  		               		 	                                 
		                       <label><h6 class="columnapropietario">Tipo de inmueble&nbsp;&nbsp;</h6></label> 
			                        <select>
									  <option>Vivienda *</option>
									  <option>Local comercial *</option>
									  <option>Garaje *</option>
									  <option>Finca rústica *</option>
									  <option>Habitación con gloryhole *</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Dirección&nbsp;&nbsp;</h6></label><br/>                                   
			                        <input type="password" class="form-control" name="calle_inmueble" placeholder="Calle y número *" />
			                        <input type="text" class="form-control" name="municipio_inmueble" placeholder="Municipio *" />                                   
			                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal *" />
			                        <input type="text" class="form-control" name="provincia_inmueble" placeholder="Provincia *" /> 
		                        <hr class="inmueble"/>
		                        <label><h6 class="columnapropietario">Nº de habitaciones&nbsp;&nbsp;</h6></label> 
			                        <select>
									  <option>1 *</option>
									  <option>2 *</option>
									  <option>3 *</option>
									  <option>4 *</option>
									  <option>5 *</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select>
									  <option>1 *</option>
									  <option>2 *</option>
									  <option>3 *</option>
									</select>  
		                        <br/>                     
		                        <small>* Campos obligatorios</small>   					   					    					
		                        <br/><br/>
		                        <button type="submit" class="btn btn-primary btn-sm">Continuar</button>
		                        <br/><br/>
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