<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/admin.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_pro.php';
    ?>      



  <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_propietario.php';
    			?> 
    			
               
                <div class="col-xs-10">
                	<div class="row-fluid">	
                	    <div class="col-sm-12">
                	    	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-folder-open"></i> Tus notificaciones</h3>
		                		</div>
		                	</div>
		                
		                	<?php
		                	
		                		if(isset($_SESSION["IdUsuario_sesion"])){
		                			
									$id_usuario = $_SESSION["IdUsuario_sesion"];
									
									$tabla = 'notificacion'; $idTabla = 'IdNotificacion'; $arrayAtributos = array(1=>'Contenido', 2=>'Fecha');
			                        $filtro = array('IdUsuario' => $id_usuario);
			                        $arrayOrden = array(1 => 'Fecha', 2=> 'desc');
			                        $arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
			                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
			                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
									
									echo $mensaje;
									
		                		} 
		                		
		                	?>
		                			                		                    
		             </div>            
                </div> 
             </div>
        </div>
    </div>  
   </div>
    
   <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>