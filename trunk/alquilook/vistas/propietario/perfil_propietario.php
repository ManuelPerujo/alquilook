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
            	<!--------------------------------------------------------Columna Izda----------------------->
                <div class="col-xs-3 text-center columnaizda">               	
                	<br/>	
                    <a class="imagenboton" href="#"><img class="imagenboton" src="<?php echo $ruta?>img/mas_inm_pro.png"></a>
                    <h5 class="columnapropietario">Añadir inmueble</h5>
                    
                    <br/>	
                    <a class="imagenboton" href="#"><img class="imagenboton" src="<?php echo $ruta?>img/ver_inm_pro.png"></a>
                    <h5 class="columnapropietario">Ver inmuebles</h5>
                    
                    <hr class="propietario"/>
                    
                    <a class="imagenboton2" href="#"><img class="imagenboton2" src="<?php echo $ruta?>img/salir.png"></a>
                    <h6 class="columnapropietario">Salir</h6>
                    
                    <a class="imagenboton2" href="#"><img class="imagenboton2" src="<?php echo $ruta?>img/mensaje.png"></a>
                    <h6 class="columnapropietario">Mensajes</h6>
                  
                </div>
                <!--------------------------------------------------------Columna Izda----------------------->
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-9 columnadcha"> 
                	              
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