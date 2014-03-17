<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
    <!-------------------------------------------------------------------------------------------------------------------------------Carousel-->
    <div id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo $ruta?>img/slide.jpg');"></div>
                <div class="carousel-caption">
                    <h1>Alquilar está bien</h1>
                    <h3>Alquilar con garantías está mejor aún</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo $ruta?>img/slide2.jpg');"></div>
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
    
    

    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                
                <form method="post" action="<?php echo $ruta?>controladores/control_registro_propietario.php">
                                       
                        <br/>
                        <input type="text" class="form-control" name="usuario_propietario" placeholder="Usuario" /> 
                        <br/>                                   
                        <input type="password" class="form-control" name="pass_propietario" placeholder="Contraseña" />
                        <br/>
                        <input type="text" class="form-control" name="email_propietario" placeholder="Email" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="nombre_propietario" placeholder="Nombre" />
                        <br/>
                        <input type="text" class="form-control" name="apellidos_propietario" placeholder="Apellidos" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="dni_propietario" placeholder="DNI" />
                        <br/>
                        <input type="text" class="form-control" name="telefono_propietario" placeholder="Telefono" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="domicilio_propietario" placeholder="Domicilio" />
                        <br/>
                        <input type="text" class="form-control" name="cp_propietario" placeholder="CP" /> 
                        <br/>                                   
                        <input type="text" class="form-control" name="poblacion_propietario" placeholder="Poblacion" />
                        <br/>
                        <input type="text" class="form-control" name="provincia_propietario" placeholder="Provincia" />
                        <br/>
                        <input type="submit" class="btn btn-primary btn-sm"></input>
                    
                </form> 
                                                            
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