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
    
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                	<div class="col-sm-10 col-xs-12">
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-group"></i> Usuario e inmueble</h3>
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

						if(isset($_SESSION['add_inquilino'])){
											
							if($_SESSION['add_inquilino'] == TRUE){
								
								echo "<div class='row'>
								  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;El inquilino se a&ntildeadio con éxito!</h5>
				                		</div>
									  </div>";
								
							}				
							
							unset($_SESSION['add_inquilino']);
											
			            }	
						
		            ?>
					
		            
		            
		            <div class="row">
                	<div class="col-xs-12">	
		            
		            
		            <?php
		            					            				            			
		            			$direccion = $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
								$_SESSION['direccion'] = $direccion;
		            
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