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
                <div class="col-xs-9">
                	<div class="row-fluid">	
                	    <div class="col-sm-8">
		                	<h3><i class="fa fa-folder-open"></i> Tus inmuebles</h3>		               		 	                                 
		                        <!--------------------------------------------------------Tablas inmuebles----------------------->
		                        <div class="row columnadcha">
		                       		  dfsdf
								</div>
								<!-------------------------------------------------------- Fin Tablas inmuebles----------------------->
		                      
		                </div>
		                <div class="col-sm-4">
		                </div>              
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    </div>
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>