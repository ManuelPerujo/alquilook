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
		                	<h3>Características de habitación</h3>
		               		 <form class="form-inline text-left" method="post" action="">  		               		 	                                 
		                       <label><h6 class="columnapropietario">Tipo de habitación&nbsp;&nbsp;</h6></label> 
			                        <select>
									  <option>Salón</option>
									  <option>Cocina</option>
									  <option>Comedor</option>
									  <option>Dormitorio</option>
									  <option>Aseo</option>
									  <option>Otros</option>
									</select>
								<br />	
		                        <label><h6 class="columnapropietario">Mobiliario&nbsp;&nbsp;</h6></label><br/>                                   
			                        <input type="checkbox"><small> Sofá</small>
			                    <hr class="inmueble"/>    
			                    <h5 class="pull-right"><i class="fa fa-plus-circle"></i> Añadir habitación</h5>
			                    <hr class="inmueble"/> 
		                        <br/><br/>
		                        <button type="submit" class="btn btn-primary btn-sm">Finalizar</button>
		                        <br/><br/>
		                    </form>
		               </div>
		               
		               
		               <div class="col-sm-7">
		               
		               </div>    	              
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