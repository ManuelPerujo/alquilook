<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/usuarios.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_inq.php';
    ?>      



	 <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_inquilino.php';
    			?> 
    			
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-10">
                	<div class="row-fluid">	
                	    <div class="col-sm-12">
                	    	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-folder-open"></i> Tus inmuebles</h3>
		                		</div>
		                	</div>
		                	<!--------------------------------------------------------Tablas inmuebles---------------------------->
		                	
		                	<?php 
		                	
		                		if(isset($_SESSION['bienvenida']) && $_SESSION['bienvenida'] == TRUE){
		                			
									echo "<div class='row'>
					                		<br />
					                		<div class='col-sm-8 col-xs-12 text-center alert alert-success alert-dismissable'>
									               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 							<h3><i class='fa fa-info-circle fa-lg'></i> Para comenzar, haga click en 'Añadir inmueble'</h3>
								            </div>
								        </div>";
										
									unset($_SESSION['bienvenida']);	 
									
		                		}if(isset($_SESSION['up_exito'])){
											
									if($_SESSION['up_exito'] == TRUE){
								
										echo "<div class='row'>
										  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
										       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Incidencia registrada!</h5>
						                		</div>
											  </div>";
									
										unset($_SESSION['up_exito']);
								
									}
		
								}                
				
                			?>
		                	
		                	<?php
		                		if(isset($_SESSION["IdUsuario_sesion"])){
		                			
									$id_usuario = $_SESSION["IdUsuario_sesion"];
									$arrayInmuebles = get_inmueble_datos($id_usuario);
									
									foreach ($arrayInmuebles as $key => $value) {
										
										echo $value;
										unset($arrayInmuebles);
									}
									
		                			
										
		                		} 
		                		
		                	?>
		                			                		                    
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