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
                		<h3><i class="fa fa-comment-o"></i> Mensajes:</h3>
                	
                	<?php 
                	
                		$idUsuario = $_SESSION['IdUsuario_sesion'];
                	
                		$tabla = 'conversacion'; $idTabla = 'IdConversacion'; $arrayAtributos = array(1=>'FechaInicio',2=>'Titulo');
                        $filtro = array();
                        $arrayOrden = array(1 => 'FechaInicio', 2=> 'desc');
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