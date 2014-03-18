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
            	<div class="col-sm-2 text-center"></div>
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
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-xs-3 text-center columnapropietario">
                   <a class="imagenboton" href=""><img class="imagenboton" src="<?php echo $ruta?>img/mas_inm.png"></a>
                   <h5>Añadir inmueble</h5>
                </div>
                <div class="col-xs-9">
                    
                        
                </div>
                                                                            
            </div>
            <div class="row">&nbsp;</div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>