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
									  <option>Vivienda</option>
									  <option>Local comercial</option>
									  <option>Garaje</option>
									  <option>Finca rústica</option>
									  <option>Habitación con gloryhole</option>
									</select>
		                        <hr class="inmueble"/> 
		                        <label><h6 class="columnapropietario">Dirección&nbsp;&nbsp;</h6></label><br/>                                   
		                        <input type="password" class="form-control" name="calle_inmueble" placeholder="Calle y número *" />
		                        <input type="text" class="form-control" name="municipio_inmueble" placeholder="Municipio *" />                                   
		                        <input type="text" class="form-control" name="cp_inmueble" placeholder="Código postal *" />
		                        <input type="text" class="form-control" name="apellidos_inmueble" placeholder="Apellidos *" />                                   
		                        <input type="text" class="form-control" name="dni_inmueble" placeholder="DNI *" />
		                        <input type="text" class="form-control" name="telefono_inmueble" placeholder="Teléfono *" />                                   
		                        <input type="text" class="form-control" name="domicilio_inmueble" placeholder="Domicilio *" />
		                        <input type="text" class="form-control" name="cp_inmueble" placeholder="CP *" />                                   
		                        <input type="text" class="form-control" name="poblacion_propietario" placeholder="Poblacion *" />
		                        <input type="text" class="form-control" name="provincia_propietario" placeholder="Provincia *" />  
		                        <br/>                     
		                        <small>* Campos obligatorios</small>   					   					    					
		                        <br/><br/>
		                        <input type="submit" class="btn btn-primary btn-sm"></input>
		                        <br/><br/>
		                    </form> 
		               </div>
		               <div class="col-sm-6 text-left"></div>    	              
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