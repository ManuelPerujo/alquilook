<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <!-------------------------------------------------------------------------------------------------------------------------------Banner propietario--------------------->

	 <div class="section-colored">
        <div class="container">
            <div class="row">
            	<div class="col-sm-2"></div>
                <div class="col-sm-2 text-center">
                	<img class="imagenbanner" src="<?php echo $ruta?>img/propietario.png">
                </div>     
                <div class="col-sm-4 text-center">
                	<hr/>
                	<h2 class="banner">SOY PROPIETARIO</h2>
                	<hr/>
                </div> 
                <div class="col-sm-4"></div>                                                       	            	
			</div>
		</div>
	</div>	
	<!-------------------------------------------------------------------------------------------------------------------------------Banner propietario--------------------->
    
    
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
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
                <div class="col-xs-9 columnadcha">                    
                </div>                                                                           
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>