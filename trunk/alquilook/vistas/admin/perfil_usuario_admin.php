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
		            		                  
		            <?php
		            	
			            if(isset($_SESSION['up_exito'])){
											
							if($_SESSION['up_exito'] == TRUE){
								
								echo "<div class='row'>
								  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;El archivo se subió con éxito!</h5>
				                		</div>
									  </div>";
								
							}if($_SESSION['up_exito'] == FALSE){
								
								echo "<div class='row'>
								  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 				<h5><i class='fa fa-thumbs-down fa-lg'></i> &nbsp;&nbsp;Fallo al subir archivo. Compruebe que ha insertado las fechas</h5>
				                		</div>
									  </div>";
								
							}				
							
							unset($_SESSION['up_exito']);
											
			            }
		            ?>
					
		            
		            
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