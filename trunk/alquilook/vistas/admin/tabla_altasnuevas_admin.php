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
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div id="" class="col-sm-10 col-xs-12">
                	<h3><i class="fa fa-bell"></i> Altas nuevas</h3> 
                	

		            <?php 
		            	
		            	$tabla1 = 'incidencia'; $tabla2 = 'inmueble'; $idTabla = 'inmueble.IdInmueble'; 
		            	$arrayAtributos = array(1=>'Fecha', 2=>'Direccion', 3=>'Provincia', 4=>'Municipio');
						$arrayOrden = array(1 => 'incidencia.Fecha', 2=> 'asc');
						$arrayOpciones = array('opciones' => FALSE, 'borrar' => TRUE, 'modificar' => TRUE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE);
		            	$mensaje = get_tablaIncidencias_combinada_filtros_y_opciones($tabla1, $tabla2, $idTabla, $arrayAtributos, $arrayOpciones, $arrayOrden);

						echo $mensaje;
		            
		            ?>    	

                	
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