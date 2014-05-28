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
    
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <div class="col-sm-10 col-xs-12">
                		<h3><i class="fa fa-gavel"></i> Incidencias Contratos:</h3>
                		
                	  <?php 
                	
                		$tabla = 'incidencia'; $idTabla = 'IdIncidencia'; $arrayAtributos = array(1=>'Fecha', 2=>'Tipo', 3=>'SubTipo', 4=>'Contenido', 5=>'EstadoIncidencia');
                        $filtro = array('Tipo' => 'IncidenciasCambioContrato');
                        $arrayOrden = array(1 => 'Fecha', 2=> 'desc');
                        $arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
						
						echo $mensaje;
                	
                	?>
                		
                </div> 
            </div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>