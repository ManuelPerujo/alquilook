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
		                			<h3><i class="fa fa-user"></i> Perfil usuario</h3>
		                			<hr class="grisdoble"/>
		                		</div>
		            </div>
		            <div class="row">
                	    		<div class="col-xs-12">
                	    			
                	    			<?php 
                	    			
                	    				if($_GET['tipo'] == 'Propietario'){
                	    					
											echo "<h4><i class='fa fa-pencil'></i> Editar Propietario</h4>";
											
                	    				}if($_GET['tipo'] == 'Inquilino'){
                	    					
											echo "<h4><i class='fa fa-pencil'></i> Editar Inquilino</h4>";
											
                	    				}
                	    			
                	    			?>
		                			
		                		</div>
		            </div>
		           <div class="row">
		                <div class="col-sm-5 col-xs-12">
		               		 <?php 
		               		 
		               		 	$mensaje = null;
								
								if($_GET['tipo'] == 'Propietario'){
										
									$mensaje = modifica_propietario();
									
									echo $mensaje;
									
								}if($_GET['tipo'] == 'Inquilino'){
										
									$mensaje = modifica_inquilino();
									
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