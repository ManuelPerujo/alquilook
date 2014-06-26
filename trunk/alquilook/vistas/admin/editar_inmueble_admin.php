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
    
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <div class="col-sm-10 col-xs-12">
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-home"></i> Inmueble</h3>
		                		</div>
		            </div>
		            <div class="row">
                	    		<div class="col-xs-12">
		                			<i class="fa fa-pencil"></i> Editar inmueble - (Paso 1 de 2)
		                		</div>
		            </div>
		           <div class="row-fluid">
		                	<div class="col-sm-10 col-xs-12">
		               		<?php 
		               			            			
		               			$mensaje = null;
		               			
		               			if(isset($_GET['idInmueble'])){
		               				
									$mensaje = modifica_inmueble();
									
									echo $mensaje;
									
		               			}
		               		
		               		
		               		?>
		                    <br/>
		                    </div>
		           </div>
                	
                </div> 
            </div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>