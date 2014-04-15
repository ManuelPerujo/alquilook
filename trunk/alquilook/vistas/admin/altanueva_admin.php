<?php
 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/registro.php';
	   
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
                
                <?php 
                	
                	$idInmueble = $_GET['IdInmueble'];
					
					up_incidencia_atendida($idInmueble);
                	
                	$datosUsuario = get_datosUsuario_from_IdInmueble($idInmueble);
                	
					$datosInquilinos = get_datosInquilinos_from_IdInmueble($idInmueble);
					
					$datosInmueble = get_datosInmueble($idInmueble);
					
					$datosEstancias = get_datosEstancias_from_IdInmueble($idInmueble);
					
                ?>
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-sm-10 col-xs-12">
                			<h3><i class="fa fa-bell"></i> Alta nueva</h3>
	                		<hr class="grisdoble"/>
							<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton img-circle" src="<?php echo $ruta?>img/botones/propietario.png">
		                		 </div>
	                			<?php echo $datosUsuario; ?>
	        				</div>
	        				<?php echo $datosInquilinos; ?>
	        				<hr class="grissimple"/>
	                		<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/inmueble.png">
		                		 </div>
	                			 <?php echo $datosInmueble; ?>
		                		 <div class="col-xs-5">	
					                	<h5 class="media-heading">Datos de mobiliario y electrodomésticos:</h5>
						                	<?php echo $datosEstancias; ?> 
		                		 </div>
		                		 <hr class="grisdoble"/>
	        				</div>	
	        				<div class="row">
								<div class="col-xs-12 text-center">
									<a href="" class="btn btn-default btn-lg"><i class="fa fa-file-text"></i> Generar Contrato PDF</a>	
				        			<br/><br/>
								</div>
							</div>		
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>