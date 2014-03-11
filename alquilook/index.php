<?php 

	session_start();
	include_once 'plantillas/importaciones.php';
	

?>

<body>
	<?php
		include_once 'plantillas/cabecera.php';
	?>
	
	<!-------------------------------------------------------------------------------------------------------------------------------Carousel-->
    <div id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Alquilar está bien</h1>
                    <h3>Alquilar con garantías está mejor aún</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Porque alquilar a lo loco...</h1>
                    <h3>...es de malitos</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    <!-------------------------------------------------------------------------------------------------------------------------------Carousel-->
    
    <!-------------------------------------------------------------------------------------------------------------------------------Vídeo-->
    <div class="section">
        <div class="container">
        	<div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    	<img src="img/portatil.png" class="portatil">
                        <iframe class="video" width="560" height="315" src="//www.youtube.com/embed/A7Js3veybt0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 col-md-6 text-left">
                    <h2 class="videoh2">Conozca en</h2>
                    <h1 class="videoh1">45 segundos</h1>
                    <h2 class="videoh2">cómo funciona alquilook.com</h2>
                    <p class="videop"><i class="fa fa-check"></i> Menos calvicie y estrés</p>
                    <p class="videop"><i class="fa fa-check"></i> Menos peleas con tu parienta</p>
                    <p class="videop"><i class="fa fa-check"></i> Más horitas de sueño</p>
                </div>
            </div>
        </div>
     </div>           
    
    <!-------------------------------------------------------------------------------------------------------------------------------Vídeo -->

	<!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
        	<div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-lg-2 text-center">
                	<img src="img/propietario.png">
                </div>     
                <div class="col-lg-3 text-center">
                	<hr class="propietario"/>
                	<h1>soy propietario</h1>
                		<a class="enlace" href="#"><i class="fa fa-sign-in"></i> Ingresar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="enlace" href="#"><i class="fa fa-edit"></i> Registrarse</a>
                	<hr class="propietario"/>
                </div>   
				<div class="col-lg-2 text-center">        
                </div>                    
                <div class="col-lg-2 text-center">
                	<img src="img/inquilino.png">
                </div>   
                 <div class="col-lg-3 text-center">
                 	<hr class="inquilino"/>
                	<h1>soy inquilino</h1>
                		<a class="enlace" href="#"><i class="fa fa-sign-in"></i> Ingresar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="enlace" href="#"><i class="fa fa-edit"></i> Registrarse</a>
                	<hr class="inquilino"/>
                </div>  
                                        	            	
			</div>
		</div>
	</div>	
	<!-------------------------------------------------------------------------------------------------------------------------------Log in-->

	
	<?php
		include_once 'plantillas/pie.php';
	?>
</body>
</html>