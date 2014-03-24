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
                <div class="col-xs-10">
                	<div class="row-fluid">	
                	    <div class="col-sm-12">
		                	<h3><i class="fa fa-folder-open"></i> Tus inmuebles</h3>		               		 	                                 
		                        <!--------------------------------------------------------Tablas inmuebles---------------------------->
		                        <div class="row">
		                       		<div class="col-sm-6 media">
										  <a class="pull-left" href="#">
										    <img class="imagenbanner magenta-bg" src="<?php echo $ruta?>img/botones/inmueble.png">
										  </a>
										  <div class="media-body">
										    <h5 class="media-heading">Ronda / Calle Juan Tenorio</h5>
										    <p>25 metros</p>
										    <p>4 habitacfsdciones</p>
										  </div>
		                       		</div>	
		                       		<div class="col-sm-2 magenta-bg text-center">
		                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/contrato.png">
		                       			Ver contrato
		                       		</div>
		                       		<div class="col-sm-2 text-center">
		                       			 <div class="row">
		                       				<div class="col-sm-12 steel-grey2 text-center">
				                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/luz.png">
				                       			Luz
				                       		</div>
				                       	</div>
				                       	<div class="row">
		                       				<div class="col-sm-12 steel-grey2 text-center">		
				                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/agua.png">
				                       			Agua
				                       		</div>
				                       	</div>
				                       	<div class="row">
		                       				<div class="col-sm-12 steel-grey2 text-center">		
				                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/gas.png">
				                       			Gas
				                       		</div>
				                       	</div>		
		                       		</div>
		                       		<div class="col-sm-2 text-center">
		                       			<div class="row">
		                       				<div class="col-sm-12 orange2 text-center">
				                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/incidencias.png">
				                       			Crear incidencia
				                       		</div>
				                       	</div>
				                       	<div class="row">
		                       				<div class="col-sm-12 orange2 text-center">		
				                       			<img class="imagenboton2" src="<?php echo $ruta?>img/botones/historial.png">
				                       			Ver incidencias
				                       		</div>
				                       	</div>		
		                       		</div>
								</div>
								
								<!-------------------------------------------------------- Fin Tablas inmuebles----------------------->
		                      
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