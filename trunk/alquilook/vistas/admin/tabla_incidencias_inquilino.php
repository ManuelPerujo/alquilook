<?php
 
    session_start();
	
    include_once '../../plantillas/importaciones.php';
	    
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
                		<h3><i class="fa fa-key"></i> Incidencias Inquilinos:</h3>
                		
                	  <?php 
                	
                		$tabla = 'incidencia'; $idTabla = 'IdIncidencia'; $arrayAtributos = array(1=>'Fecha', 2=>'Tipo', 3=>'SubTipo', 4=>'Contenido');
                        $filtro = array('Tipo' => 'IncidenciasCambioInquilino');
                        $arrayOrden = array(1 => 'Fecha', 2=> 'desc');
                        $arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
						
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