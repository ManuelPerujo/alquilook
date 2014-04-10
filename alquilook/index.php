<?php 

	session_start();
	include_once 'plantillas/importaciones.php';
	
?>


<body>
	<?php
		include_once 'plantillas/cabecera.php';
	?>
	
	<!-------------------------------------------------------------------------------------------------------------------------------Carousel---
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide.jpg');"></div>
                <div class="carousel-caption">
                	<h3 class="slider">Gestiona</h3>
                    <h3 class="slider">Alquilook</h3>
                    <h3 class="slider">desde tu móvil</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h3 class="slider">El pago y cobro</h3>
                    <h3 class="slider">de suministros</h3>
                    <h3 class="slider">es tarea nuestra</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h3 class="slider">Asegúrate</h3>
                    <h3 class="slider">el cobro de tus</h3>
                    <h3 class="slider">alquileres</h3>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    <!-------------------------------------------------------------------------------------------------------------------------------Carousel------->
    
    
    <div class="responsive-slider-parallax" data-spy="responsive-slider" data-autoplay="true" data-parallax="true" data-parallax-direction="1">
      <div class="slides-container" data-group="slides">
        <ul>
          <li>
            <div class="slide-body" data-group="slide">
              <div class="container">
                <div class="wrapper">
                  <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                    <h3 class="slider">Responsive<br/>slider</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h5>fesfgsdgfvdsgdsr</h5></div>
                  </div>
                  <div class="caption img-html5" data-animate="slideAppearLeftToRight" data-delay="200">
                    <img src="img/html5.png">
                  </div>
                  <div class="caption img-css3" data-animate="slideAppearLeftToRight">
                    <img src="img/css3.png">
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="slide-body" data-group="slide">
              <div class="container">
                <div class="wrapper">
                  <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                    <h3 class="slider">Responsive<br/>slider</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h5>fesfgsdgfvdsgdsr</h5></div>
                  </div>
                  <div class="caption img-html5" data-animate="slideAppearUpToDown" data-delay="200">
                    <img src="img/html5.png">
                  </div>
                  <div class="caption img-css3" data-animate="slideAppearDownToUp">
                    <img src="img/css3.png">
                  </div>
                </div>
              </div>
            </div>
          </li>
           <li>
            <div class="slide-body" data-group="slide">
              <div class="container">
                <div class="wrapper">
                  <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="500" data-length="300">
                    <h3 class="slider">Responsive<br/>slider</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h5>fesfgsdgfvdsgdsr</h5></div>
                  </div>
                  <div class="caption img-html5" data-animate="slideAppearDownToUp" data-delay="200">
                    <img src="img/html5.png">
                  </div>
                  <div class="caption img-css3" data-animate="slideAppearUpToDown">
                    <img src="img/css3.png">
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-chevron-right"></i></a>
      <div class="pages">
        <a class="page" href="#" data-jump-to="1">1</a>
        <a class="page" href="#" data-jump-to="2">2</a>
        <a class="page" href="#" data-jump-to="3">3</a>
      </div>
    </div>
    
    
    <!-------------------------------------------------------------------------------------------------------------------------------Vídeo-->
    <div class="section">
        <div class="container">
        	<br/><br/><br/>
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    	<img src="img/portatil.png" class="portatil">
                        <iframe class="video" width="560" height="315" src="//www.youtube.com/embed/I9ix0ECNuyE" frameborder="0" allowfullscreen></iframe>
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
        	<br/><br/><br/>
            <div class="row">
            	<!---------------------------------------------------------------------------------------------Propietario-->
                    
                <div class="col-lg-4 text-center collapse-group">
                	<img class="imagen magenta-bg img-circle" src="img/botones/propietario.png">
                	<h2>SOY PROPIETARIO</h2>
                		<?php 
                			if(isset($_SESSION["IdUsuario_sesion"])){
                				
								echo "<a class='enlace' href='controladores/control_salir.php' ><i class='fa fa-unlock'></i> Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                					<a class='enlace' href='vistas/inmueble/tabla_inmuebles_pro.php'><i class='fa fa-user'></i> Mis Inmuebles</a>";
								
                			}else{
                				
						?>
                		<a class="enlace" data-toggle="collapse" data-target="#ingresarpropietario"><i class="fa fa-sign-in"></i> Ingresar</a><br/>
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
                <br/><br/><br/>
                </div>   
                <!---------------------------------------------------------------------------------------------Propietario-->
                
                <!---------------------------------------------------------------------------------------------Inquilino-->
				<div class="col-lg-4 text-center collapse-group">
                 	<img class="imagen coral-bg img-circle" src="img/botones/inquilino.png">
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
                <br/><br/><br/>
                </div>  
                <!---------------------------------------------------------------------------------------------Inquilino-->
                
                
                <!---------------------------------------------------------------------------------------------Inmobiliaria-->
                <div class="col-lg-4 text-center collapse-group">
                	<img class="imagen magenta-bg img-circle" src="img/botones/inmobiliaria.png">
                	<h2>SOY INMOBILIARIA</h2>
                		<?php 
                			if(isset($_SESSION["IdUsuario_sesion"])){
                				
								echo "<a class='enlace' href='controladores/control_salir.php' ><i class='fa fa-unlock'></i> Salir</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                					<a class='enlace' href='vistas/inmueble/tabla_inmuebles_pro.php'><i class='fa fa-user'></i> Mis Inmuebles</a>";
								
                			}else{
                				
						?>
                		<a class="enlace" data-toggle="collapse" data-target="#ingresarinmobiliaria"><i class="fa fa-sign-in"></i> Ingresar</a><br/>
                		<a class="enlace" href="<?php echo $ruta?>vistas/propietario/registro_propietario.php"><i class="fa fa-edit"></i> Registrarse</a>
 							<form method="post" action="<?php echo $ruta?>controladores/control_login.php" onsubmit="validacion_login_propietario();">	
 								<p class="collapse" id="ingresarinmobiliaria">
 								 	<br/>
   									<input type="text" class="form-control" id="usuario1" name="usuario_propietario" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password1" name="pass_propietario" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-primary btn-sm">Entrar</button>
  								</p>
  							</form>
  						<?php 
							} 
						?>
				<br/><br/><br/>
                </div>   
                <!---------------------------------------------------------------------------------------------Inmobiliaria-->    
                                   	            	
			</div>
		</div>
	</div>	
	<!-------------------------------------------------------------------------------------------------------------------------------Log in-->

    	
	<?php
	   include_once 'plantillas/pie.php';
	?>
	
	
    <script src="js_slider/jquery.js"></script>
    <script src="js_slider/jquery.event.move.js"></script>
    <script src="js_slider/responsive-slider.js"></script>

       
</body>
</html>