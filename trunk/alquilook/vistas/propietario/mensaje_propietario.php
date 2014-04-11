<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/usuarios.php';   
	 
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
                		<h3><i class="fa fa-envelope-o"></i> Mensaje:</h3>
	                	<div class="media">
	                		  <br/>
							  <a class="pull-left" href="#">
							    	<img class="imagenboton2 steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/admin.png">
							  </a>
							  <?php 
							  		
							  		$idMensaje = $_GET['IdMensaje'];
							  		
							  		$mensaje = get_mensaje($idMensaje);
									
									echo $mensaje;	
							  
							  ?>
							  <div class="text-center">
								 	<a class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-comment"></i> Responder
								    </a>
							 </div>	
							 <br/>
							 <div id="responder" class="collapse">
							 		<form class="form-group  text-center" method="post" action="">
							 			<textarea class="" name="" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<a type="submit" class="btn btn-primary btn-sm">Enviar</a>
							 		</form>
							 </div>
							 <br/>
						</div>
                	<br/>
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>