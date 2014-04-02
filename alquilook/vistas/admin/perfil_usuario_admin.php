<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';
	include_once '../../funciones/inmueble.php';    
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
		                			<h3><i class="fa fa-bars"></i> Ficha usuario e inmueble</h3>
		                		</div>
		            </div>
		            
		            <div class="row fondogris">
                	<div class="col-xs-12">	
		            
		            <!-------------------------------------------------------- Contenido fijo  PROPIETARIO----------------------->
		             
		            <?php
		                		if(isset($_GET["IdUsuario"])){
		                			
									$tipo = $_GET['tipo'];
									$id_usuario = $_GET["IdUsuario"];
									
									$arrayInmuebles = get_inmueble_datos_admin($id_usuario, $tipo);
									
									foreach ($arrayInmuebles as $key => $value) {
										
										echo $value;
										unset($arrayInmuebles);
									}
									
		                		} 
		                		
		            ?>
		            
                	
		        </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
         </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>