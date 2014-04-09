<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';    
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
							    	<img class="imagenboton2 steel-grey2 img-circle" src="<?php echo $ruta?>img/banner/admin.png">
							  </a>
							  <div class="media-body">
								  	<a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
								    <h5 class="media-heading">Administrador</h5>
								    <h6 class="media-heading">18 / 04 / 14</h6>
								    <p class="mayusculas">Asunto: Llevo 3 días intentándolo y aún no puedo registrarme en alquilook</p>
								    <hr class="grissimple"/>
								    <p class="ficha2">
								    Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo.
								    </p>
							  </div>
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