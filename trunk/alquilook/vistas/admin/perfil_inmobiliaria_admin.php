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
                	<h3>Ficha de Inmobiliaria e inmuebles</h3>
                	<a class="enlace3" href="<?php echo $ruta?>vistas/admin/tabla_inmobiliarias_admin.php"><i class="fa fa-chevron-left"></i> Volver a Inmobiliarias</a>
                	<hr class="grisdoble"/>
					    <div class="row">
								<div class="col-md-2 col-xs-12">   	
					                <img class="imagenboton" src="<?php echo $ruta?>img/botones/inmobiliaria.png" alt="">
					                <br/><br/>
		                		 </div>
								<div class="col-md-5 col-xs-12">
									<h5 class='mayusculas'>Nombre de empresa:</h5>
									<h5 class='negro'><small class='gris'>Inmuebles registrados:</small>&nbsp;5</h5>
							        <h5 class='negro'><small class='gris'>CIF:</small>&nbsp;52895985</h5>
							        <h5 class='negro'><small class='gris'>Nombre del contacto:</small>&nbsp;Nombre Apellido Appellido</h5>
							        <h5 class='negro'><small class='gris'>Teléfono:</small>&nbsp;666888999</h5>
							        <h5 class='negro'><small class='gris'>IBAN:</small>&nbsp;ES8899995555666633334444</h5>							                	
								</div>
								<div class="col-md-5 col-xs-12">
									<h5 class='negro'><small class='gris'>Email:</small>&nbsp;cacaca@gmail.com</h5>
									<h5 class='negro'><small class='gris'>Direeción Postal:</small>&nbsp;C/ Gorrioncé, 25. 4A</h5>
							        <h5 class='negro'><small class='gris'>CP:</small>&nbsp;47888</h5>
							        <h5 class='negro'><small class='gris'>Población:</small>&nbsp;Pruna</h5>
							        <h5 class='negro'><small class='gris'>Provincia:</small>&nbsp;Sevilla</h5>	
								</div>
	        			</div>
	        			<hr class="grisdoble" />
	        			<div class="row">
								<div class="col-xs-12">
									Tabla igual que la de altas nuevas
								</div>
						</div>
                </div> 
            </div>
        </div>
    </div>  
  
    <?php
        include_once "../../plantillas/pie_admin.php";
    ?>        
    
</body>
</html>