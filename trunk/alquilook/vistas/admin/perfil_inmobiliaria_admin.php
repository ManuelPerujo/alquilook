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
								
								<?php 
								
									$mensaje = null;
								
									if(isset($_GET["IdUsuario"])){
		                			
										$id_usuario = $_GET["IdUsuario"];
										
										$mensaje = get_inmobiliaria($id_usuario);
										
										echo $mensaje;
										
										$idInmobiliaria = get_idInmobiliaria_from_usuario($id_usuario);
										
										
										
			                		}
								
								?>
								
	        			</div>
	        			<hr class="grisdoble" />
	        			<div class="row">
								<div class="col-xs-12">
									
									<?php 
										
										$id_usuario = $_GET["IdUsuario"];
										
										$idInmobiliaria = get_idInmobiliaria_from_usuario($id_usuario);
										
										$tabla = 'inmueble'; $idTabla = 'IdInmueble'; $arrayAtributos = array(1=>'Direccion', 2=>'Municipio', 3=>'Provincia', 4=>'TipoContrato', 5=>'Valor');
				                        $filtro = array('IdInmobiliaria' => $idInmobiliaria);
				                        $arrayOrden = array(1 => 'Valor', 2=> 'desc');
				                        $arrayOpciones = array('opciones' => FALSE, 'borrar' => FALSE, 'modificar' => FALSE, 'responder' => FALSE,
				                                               'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => TRUE);  
				                        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
										
										echo $mensaje;
									
									?>
									
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