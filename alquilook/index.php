<?php 

	session_start();
	include_once 'plantillas/importaciones.php';
	
?>


<body>
	<?php
		include_once 'plantillas/cabecera.php';
	?>
	
    
    <div class="responsive-slider-parallax" data-spy="responsive-slider" data-autoplay="true" data-parallax="true" data-parallax-direction="1">
      <div class="slides-container" data-group="slides">
        <ul>
        	
          <li>
            <div class="slide-body" data-group="slide">
              <div class="container">
                <div class="wrapper">
              	  <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="300" data-length="300">
                    <h3 class="slider">Alquilook<br/>gestiona tu alquiler</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="500" data-length="300"><h2>Alquilar no siempre es fácil.<br/>Nosotros te ayudamos.<br/>No te compliques la vida.</h2></div><br />
                  </div> 
                  <div class="caption img-1" data-animate="slideAppearLeftToRight" data-delay="500">
                    <img src="img/1.png" alt="">
                  </div>
                  <div class="caption img-2" data-animate="slideAppearDownToUp" data-delay="700">
                    <img src="img/2.png" alt="">
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
                    <h3 class="slider">Te aseguramos<br/>el cobro puntual</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h2>Gestionamos todos los recibos.<br/>Nos encargamos del contrato.<br/>Te ayudamos a elegir el inquilino.</h2></div><br />
                  </div>
                  <div class="caption img-3" data-animate="slideAppearUpToDown" data-delay="200">
                    <img src="img/3.png" alt="">
                  </div>
                  <div class="caption img-4" data-animate="slideAppearDownToUp">
                    <img src="img/4.png" alt="">
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
                    <h3 class="slider">El inmueble siempre<br/>en óptimas condiciones</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h2>Olvídate del casero.<br/>Controla tus pagos desde la web.<br/>Crea incidencias con un solo click.</h2></div><br />
                  </div> 
                  <div class="caption img-5" data-animate="slideAppearDownToUp" data-delay="200">
                    <img src="img/5.png" alt="">
                  </div>
                  <div class="caption img-6" data-animate="slideAppearUpToDown">
                    <img src="img/6.png" alt="">
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
                    <h3 class="slider">Seas propietario<br/>o inquilino</h3>
                    <div data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h2>En tu panel de gestión<br/>tienes todo lo que necesitas<br/>y todo lo que te interesa</h2></div><br />
                  </div> 
                  <div class="caption img-7" data-animate="slideAppearDownToUp" data-delay="200">
                    <img src="img/7.png" alt="">
                  </div>
                  <div class="caption img-8" data-animate="slideAppearUpToDown">
                    <img src="img/8.png" alt="">
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
        <a class="page" href="#" data-jump-to="4">4</a>
      </div>
    </div>
    
    
    
    <div class="section">
        <div class="container arriba2">
            <div class="row">
                <div class="col-md-6 text-center">
                    	<img src="img/portatil.png" class="portatil" alt="">
                        <iframe class="video" width="560" height="315" src="//www.youtube.com/embed/I9ix0ECNuyE" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 text-left">
                    <h2 class="videoh2">Conozca en</h2>
                    <h1 class="videoh1">75 segundos</h1>
                    <h2 class="videoh2">cómo funciona alquilook.com</h2>
                    <p class="videop"><i class="fa fa-check"></i> Tranqulidad para el propietario</p>
                    <p class="videop"><i class="fa fa-check"></i> Facilidades para el inqulino</p>
                    <p class="videop"><i class="fa fa-check"></i> Gestión online para todos</p>
                </div>
            </div>
        </div>
     </div>           
    
   
    <div class="section">
        <div class="container arriba2">
            <div class="row">
            	
                <div class="col-sm-4 text-center collapse-group">
                		<a class="enlace2" data-toggle="collapse" data-target="#ingresarpropietario">
                			<img class="imagen" src="img/botones/propietario.png" alt="">
                			<h2>SOY PROPIETARIO</h2>
                		</a>
                		
                		<?php 
                			if(isset($_SESSION["IdUsuario_sesion"]) && $_SESSION['tipo'] == 'Propietario'){
                				
								echo "<a class='enlace2' href='controladores/control_salir.php' ><i class='fa fa-unlock'></i> Salir</a>
									<br/>
                					<a class='enlace2' href='vistas/inmueble/tabla_inmuebles_pro.php'><i class='fa fa-user'></i> Mis Inmuebles</a>";
								
                			}else{
                				
						?>
                		
 							<form method="post" action="<?php echo $ruta?>controladores/control_login.php" onsubmit="validacion_login_propietario();">	
 								<p class="collapse" id="ingresarpropietario">
   									<input type="text" class="form-control" id="usuario1" name="usuario_propietario" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password1" name="pass_propietario" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-default">Entrar</button>
    								<br/><br/>
    								<a class="enlace2" href="<?php echo $ruta?>vistas/propietario/registro_propietario.php"><i class="fa fa-edit"></i> Registrarse</a>
    								<br/>
    								<a class="enlace2" href="<?php echo $ruta?>vistas/error/recordar.php"><i class="fa fa-question-circle"></i> No recuerdo mis datos</a>
  								</p>
  							</form>
  						
  						<?php 
							} 
						?>
						
                <br/><br/>                
                </div>   
                
                
				<div class="col-sm-4 text-center collapse-group">
                		<a class="enlace2" data-toggle="collapse" data-target="#ingresarinquilino">
                			<img class="imagen" src="img/botones/inquilino.png" alt="">
                			<h2>SOY INQUILINO</h2>
                		</a>
                			<form method="post" action="<?php echo $ruta?>controladores/control_login.php" onsubmit="validacion_login_inquilino();">	
 								<p class="collapse" id="ingresarinquilino">
   									<input type="text" class="form-control" id="usuario2" name="usuario_inquilino" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password2" name="pass_inquilino" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-default">Entrar</button>
    								<br/><br/>
    								<a class="enlace2" href="<?php echo $ruta?>vistas/error/recordar.php"><i class="fa fa-question-circle"></i> No recuerdo mis datos</a>
  								</p>
  							</form>	   
                <br/><br/>
                </div>  
              
              
                <div class="col-sm-4 text-center collapse-group">
                		<a class="enlace2" data-toggle="collapse" data-target="#ingresarinmobiliaria">
                			<img class="imagen" src="img/botones/inmobiliaria.png" alt="">
                			<h2>SOY INMOBILIARIA</h2>
                		</a>
                		<?php 
                			if(isset($_SESSION["IdUsuario_sesion"]) && $_SESSION['tipo'] == 'Inmobiliaria'){
                				
								echo "<a class='enlace2' href='controladores/control_salir.php' ><i class='fa fa-unlock'></i> Salir</a>
									<br/>
                					<a class='enlace2' href='vistas/inmueble/tabla_inmuebles_pro.php'><i class='fa fa-user'></i> Mis Inmuebles</a>";
								
                			}else{
                				
						?>
                		
 							<form method="post" action="<?php echo $ruta?>controladores/control_login.php" >	
 								<p class="collapse" id="ingresarinmobiliaria">
   									<input type="text" class="form-control" id="usuario3" name="usuario_inmobiliaria" placeholder="Usuario" /> 
    								<input type="password" class="form-control" id="password3" name="pass_inmobiliaria" placeholder="Contraseña" />
    								<button type="submit" class="btn btn-default">Entrar</button>
    								<br/>
    								<br/>
    								<a class="enlace2" href="<?php echo $ruta?>vistas/error/recordar.php"><i class="fa fa-question-circle"></i> No recuerdo mis datos</a>
  								</p>
  							</form>
  						
  						<?php 
							} 
						?>
						
                <br/><br/>                
                </div>   
               
               
			</div>
		</div>
	</div>	
	
	
	<?php
	   include_once 'plantillas/pie.php';
	?>
	
	
    <script src="js_slider/jquery.js"/></script>
    <script src="js_slider/jquery.event.move.js"></script>
    <script src="js_slider/responsive-slider.js"></script>

       
</body>

</html>