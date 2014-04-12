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
                <div id="users" class="col-sm-10 col-xs-12">
                	<h3><i class="fa fa-group"></i> Usuarios</h3> 
                	<?php 
                        $tabla = 'usuarios'; $idTabla = 'IdUsuario'; $arrayAtributos = array(1=>'Tipo',2=>'Nombre',3=>'Apellidos',4=>'DNI');
                        $filtro = array('UsuarioActivo' => '1', 'Admin' => '0');
                        $arrayOrden = array(1 => 'Nombre', 2=> 'asc');
                        $arrayOpciones = array('opciones' => FALSE, 'borrar' => TRUE, 'modificar' => TRUE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE);  
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