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
                	<br/>
                	<form class="form-inline text-left" method="post" action="../../controladores/control_filtro_usuarios.php">
                		
                		<input class="form-control" type="text" placeholder="Inserte un nombre o DNI" name="busqueda" size="35" />
                		&nbsp;&nbsp;
                		<select class="selector" name="tipoBusqueda">
							  <option value="Tipo" checked>Tipo</option>
							  <option value="Nombre">Nombre</option>
							  <option value="Apellidos">Apellidos</option>
							  <option value="DNI">DNI</option>
						</select>
                		&nbsp;&nbsp;
                		<button type="submit" class="btn btn-default btn-sm">Filtrar</button>
                			
                	</form>	
                	
                	 
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
							
                		}if(isset($_SESSION['busqueda_vacia'])){
                			
							if($_SESSION['busqueda_vacia'] == TRUE){
								
								unset($_SESSION['busqueda_vacia']);
								
								echo "<div class='row'>
								  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
								       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Inserte alg&uacute;n valor en el filtro.</h5>
				                		</div>
									  </div>";
								
							}	
							
                		}if(isset($_SESSION['arrayId_filtro'])){
                			
							
							$arrayId = $_SESSION['arrayId_filtro'];
							
							$arrayAtributos = array(1=>"Tipo",2=>"Nombre",3=>"Apellidos",4=>"DNI");
    						$arrayOpciones = array('opciones' => FALSE, 'borrar' => FALSE, 'modificar' => FALSE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => TRUE);
							$mensaje = get_tabla_usuarios_by_id($arrayId, $arrayAtributos, $arrayOpciones);	
							
							echo $mensaje;
							
                		}if(!isset($_SESSION['arrayId_filtro'])){
                				
                			$tabla = 'usuarios'; $idTabla = 'IdUsuario'; $arrayAtributos = array(1=>'Tipo',2=>'Nombre',3=>'Apellidos',4=>'DNI');
	                        $filtro = array('UsuarioActivo' => '1', 'Admin' => '0','not Tipo' => 'Inmobiliaria');
	                        $arrayOrden = array(1 => 'Nombre', 2=> 'asc');
	                        $arrayOpciones = array('opciones' => FALSE, 'borrar' => TRUE, 'modificar' => TRUE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => FALSE);  
	                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
							
							echo $mensaje;
                			
                		}
                		
                	 	unset( $_SESSION['arrayId_filtro']);
                        
						
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