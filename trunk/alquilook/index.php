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
                <div class="carousel-caption vcentro">
                	<div class="vcentro-item">
                		    <h1 class="slider">¿Te mola, coleguita?</h1>
                    		<h3>Tengo el pito lleno de arena, pero me da igual porque me voy y me pongo fino filipino con el rubito ese de allí..</h3>
                	</div>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h1 class="slider">Porque alquilar a lo loco...</h1>
                    <h3>...es de malitos y de ansiosos carapanes de la vida...</h3>
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
        	<br/><br/><br/>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    	<img src="img/portatil.png" class="portatil">
                        <iframe class="video" width="560" height="315" src="//www.youtube.com/embed/VDhe2ZI0tEw" frameborder="0" allowfullscreen></iframe>
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
        	<br/><br/><br/>
            <div class="row">
                <div class="col-lg-2 text-center">
                	<img class="imagen magenta-bg img-circle" src="img/banner/propietario.png">
                </div>     
                <div class="col-lg-3 text-center collapse-group">
                	<hr class="propietario"/>
                	<h2>SOY PROPIETARIO</h2>
                		<?php 
                			if(isset($_SESSION["IdUsuario_sesion"])){
                				
								echo "<a class='enlace' href='controladores/control_salir.php' ><i class='fa fa-unlock'></i> Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                					<a class='enlace' href='vistas/propietario/perfil_propietario.php'><i class='fa fa-user'></i> Mi Perfil</a>";
								
                			}else{
                				
						?>
                		<a class="enlace" data-toggle="collapse" data-target="#ingresarpropietario"><i class="fa fa-sign-in"></i> Ingresar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                		<a class="enlace" href="<?php echo $ruta?>vistas/propietario/registro_propietario.php"><i class="fa fa-edit"></i> Registrarse</a>
 							<form method="post" action="<?php echo $ruta?>controladores/control_login.php" onsubmit="validacion_login_propietario();">	
 								<p class="collapse" id="ingresarpropietario">
 								 	<br/>
   									<input type="text" class="form-control" id="usuario1" name="usuario_propietario" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password1" name="pass_propietario" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
  								</p>
  							</form>
  						<?php 
							} 
						?>
					<hr class="propietario"/>
                </div>   
				<div class="col-lg-2 text-center">        
                </div>                    
                <div class="col-lg-2 text-center">
                	<img class="imagen coral-bg img-circle" src="img/banner/inquilino.png">
                </div>   
                 <div class="col-lg-3 text-center collapse-group">
                 	<hr class="inquilino"/>
                	<h2>SOY INQUILINO</h2>
                		<a class="enlace" data-toggle="collapse" data-target="#ingresarinquilino"><i class="fa fa-sign-in"></i> Ingresar</a>
                			<form method="post" action="<?php echo $ruta?>controladores/control_login.php" onsubmit="validacion_login_inquilino();">	
 								<p class="collapse" id="ingresarinquilino">
 								 	<br/>
   									<input type="text" class="form-control" id="usuario2" name="usuario_inquilino" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password2" name="pass_inquilino" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
  								</p>
  							</form>	   
                	<hr class="inquilino"/>
                </div>  
                                        	            	
			</div>
			<br/><br/>
			<div class="row">&nbsp;</div>
		</div>
	</div>	
	<!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    	
	<?php
	   include_once 'plantillas/pie.php';
	?>
</body>
</html>