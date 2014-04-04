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
                		<h3><i class="fa fa-envelope"></i> Mensaje:</h3>
                		<hr class="grisdoble"/>
                		
	                	<div class="media">
	                		  <br/>
							  <a class="pull-left" href="#">
							    	<img class="imagenboton2 coral-bg img-circle" src="<?php echo $ruta?>img/banner/inquilino.png">
							  </a>
							  <div class="media-body">
								    <h5 class="media-heading">Juan Pérez</h5>
								    <h6 class="media-heading">18 / 04 / 14</h6>
								    <p class="mayusculas">Asunto: Llevo 3 días intentándolo y aún no puedo registrarme en alquilook</p>
								    <hr class="grissimple"/>
								    <p class="ficha">
								    Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo.
								    </p>
							  </div>
							  <div class="text-center">
								 	<a class="btn btn-default btn-sm" data-toggle="collapse" data-target="#responder">
								 		<i class="fa fa-comment"></i> Responder
								    </a>
								    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								    <a class="btn btn-default btn-sm" href="<?php echo $ruta?>vistas/admin/tabla_mensajes_admin.php">
								 		<i class="fa fa-trash-o"></i> Borrar
								    </a>
							 </div>	
							 <br/>
							 <div id="responder" class="collapse">
							 		<form class="form-group  text-center" method="post" action="">
							 			<textarea name="" placeholder="Escriba aquí su mensaje..."></textarea>
							 			<br/>
							 			<a type="submit" class="btn btn-default btn-sm">Enviar</a>
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
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>