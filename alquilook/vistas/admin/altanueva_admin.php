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
    
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <?php 
                	
                	$pdf = false;
                	
                	$idInmueble = $_GET['IdInmueble'];
					
					up_incidencia_atendida($idInmueble);
                	
                	$datosUsuario = get_datosUsuario_from_IdInmueble($idInmueble,$pdf);
                	
					$datosInquilinos = get_datosInquilinos_from_IdInmueble($idInmueble,$pdf);
					
					$datosInmueble = get_datosInmueble($idInmueble);
					
					$datosEstancias = get_datosEstancias_from_IdInmueble($idInmueble);
					
                ?>
                
                <div class="col-sm-10 col-xs-12">
                			<h3><i class="fa fa-bell"></i> Alta nueva</h3>
                			<a class="enlace3" href="<?php echo $ruta?>vistas/admin/tabla_altasnuevas_admin.php"><i class="fa fa-chevron-left"></i> Volver a Altas nuevas</a>
	                		<hr class="grisdoble"/>
							<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton img-circle" src="<?php echo $ruta?>img/botones/propietario.png" alt="">
		                		 </div>
	                			<?php echo $datosUsuario; ?>
	        				</div>
	        				<?php echo $datosInquilinos; ?>
	        				<hr class="grissimple"/>
	                		<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton" src="<?php echo $ruta?>img/botones/inmueble.png" alt="">
		                		 </div>
	                			 <?php echo $datosInmueble; ?>
		                		 <div class="col-xs-5">	
					                	<h5 class="media-heading">Datos de mobiliario y electrodomésticos:</h5>
						                	<?php echo $datosEstancias; ?> 
		                		 </div>
		                		 
	        				</div>	
	        				<hr class="grisdoble"/>
	        				<div class="row">
								<div class="col-xs-12 text-center">
									<a href="../../fpdf/pdf_contrato.php?id=<?php echo $idInmueble; ?>" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-file-text"></i> Generar Contrato PDF</a>	
				        			<br/><br/>
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