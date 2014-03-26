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
                <div class="col-sm-10 col-xs-8">
                	
                	<h3><i class="fa fa-envelope"></i> Incidencias:</h3>
			                	<table class="table-hover">
								    <tbody>
								    	<hr class="grisdoble"/>
								    	<h2>Mensajes No Leídos</h2>
								    	<hr class="grisdoble"/>
								        <tr>
								            <td>
								            	<img class="imagenboton2 magenta-bg img-circle" src="<?php echo $ruta?>img/botones/incidencias.png">
								            	<h5>Juan Pérez</h5>
											    <h6 class="media-heading magenta">18 / 04 / 14</h6>
											    <p class="mayusculas">Asunto: Llevo 3 días intentándolo y aún no puedo registrarme en alquilook</p>
											    <hr class="grissimple"/>
											    <p class="ficha">
											    Blandit incorrupte quaerendum in quo, nibh impedit id vis, vel no nullam semper audiam. Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo.
											    </p>
											</td>
								            <td>
								            	<a type="button" class="enlace close">&times;</a>
								            </td>
								        </tr>
								        <hr class="grisdoble"/>
								    	<h2>Mensajes Leídos</h2>
								    	<hr class="grisdoble"/>
								        <tr>
								            <td>
								            	<img class="imagenboton2 magenta-bg img-circle" src="<?php echo $ruta?>img/botones/incidencias.png">
								            	<h5>María Hidalgo</h5>
											    <h6 class="media-heading magenta">18 / 04 / 14</h6>
											    <p class="mayusculas">Asunto: Tengo el coño lleno de pulgas y me quieren echar del edificio...</p>
											    <hr class="grissimple"/>
											    <p class="ficha">
											    Ei populo graeci consulatu mei, has ea stet modus phaedrum. Inani oblique ne has, duo et veritus detraxit. Tota ludus oratio ea mel, offendit persequeris ei vim. Eos dicat oratio partem ut, id cum ignota senserit intellegat. Sit inani ubique graecis ad, quando graecis liberavisse et cum, dicit option eruditi at duo.
											    </p>
											</td>
								            <td>
								            	<a type="button" class="enlace close">&times;</a>
								            </td>
								        </tr>
								    </tbody>
								</table>
                	
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