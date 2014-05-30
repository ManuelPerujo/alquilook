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
                
                <div id="users" class="col-sm-10 col-xs-12">
                	<h3><i class="fa fa-group"></i> Usuarios</h3> 
                	<?php
                		
                		if(isset($_SESSION['borrado_inmueble'])){
                			
							if($_SESSION['borrado_inmueble'] == TRUE){
								
								unset($_SESSION['borrado_inmueble']);
								
								echo "<div class='row'>
								  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;El inmueble se elimino con éxito!</h5>
				                		</div>
									  </div>";
								
							}	
							
                		}
                		
                	 
                        $tabla = 'usuarios'; $idTabla = 'IdUsuario'; $arrayAtributos = array(1=>'Tipo',2=>'Nombre',3=>'Apellidos',4=>'DNI');
                        $filtro = array('UsuarioActivo' => '1', 'Admin' => '0','not Tipo' => 'Inmobiliaria');
                        $arrayOrden = array(1 => 'Nombre', 2=> 'asc');
                        $arrayOpciones = array('opciones' => FALSE, 'borrar' => TRUE, 'modificar' => TRUE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => FALSE);  
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