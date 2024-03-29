<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/registro.php';
	include_once '../../funciones/core.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_pro.php';
    ?>  
    
    <div class="section">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-lg-2 col-xs-1"></div>
	 			<div class="col-lg-8 col-xs-10 text-center">
	 				
	 								
                    <?php 
                    	if(isset($_SESSION['erroRegistro']) && $_SESSION['erroRegistro'] == true){
                    		
                    		unset($_SESSION['erroRegistro']);
                    		echo "<p>
				 					<h1><i class='fa fa-warning'></i> ALGO HA SALIDO MAL</h1>
				 					<hr class='propietario'/>
				 					<h3>Se ha cometido un error durante el registro</h3>
				 					<h5>Por favor, vuelva a intentarlo</h5>
				 					<a href='../propietario/registro_propietario.php'><button class='btn btn-primary btn-lg'>Registro</button></a>
				 				</p>";	
								
                    	}if(isset($_SESSION['bienvenida']) && $_SESSION['bienvenida'] == true){
                    		
                            unset($_SESSION['bienvenida']);
                            echo "<p>
			 					<h1><i class='fa fa-spinner fa-spin'></i> YA CASI ESTÁ...</h1>
			 					<hr class='propietario'/>
			 					<h3>Sólo falta un paso más...</h3>
			 					<h5>Vaya a su email para verificar su cuenta de Alquilook.</h5>
			 					<h6>(No olvide revisar la bandeja de correo no deseado o spam)</h6>
			 					</p>";
								
                        }if(isset($_GET) && count($_GET) != 0){
								
                        	$codigo = $_GET['var1']; $usuario = $_GET['var2'];
							
							if($_GET['bienvenida'] == '1'){
										
								$_SESSION['bienvenida'] = TRUE;	
								
							}
							
							if(valida_email($codigo, $usuario) && valida_propietario($usuario, $codigo)){
							
	                        	unset($_GET);
								echo "<p>
					 					<h1><i class='fa fa-thumbs-up'></i> ENHORABUENA</h1>
					 					<hr class='propietario'/>
					 					<h3>Se ha registrado correctamente</h3>	 					
					 					<h5>Haga click a continuación para ir a su panel de propietario.</h5>
					 					<a href='../inmueble/tabla_inmuebles_pro.php'><button class='btn btn-primary btn-lg'>Mi panel</button></a>
					 					
					 				</p>";
					 		}		
                        }if(isset($_SESSION['nuevo_inmueble']) && $_SESSION['nuevo_inmueble'] == TRUE){
                        			
                        	unset($_SESSION['nuevo_inmueble']);	
                        	echo "<p>
					 					<h1><i class='fa fa-thumbs-up'></i> ENHORABUENA</h1>
					 					<hr class='propietario'/>
					 					<h3>Ha registrado correctamente su inmueble e inquilino/os</h3>	 					
					 					<h5>Estamos generando su contrato. En breve contactaremos con usted.</h5>
					 					<h5>Mientras, puede acceder a su panel de gestión.</h5>
					 					<a href='../inmueble/tabla_inmuebles_pro.php'><button class='btn btn-primary btn-lg'>Mi panel</button></a>
					 					
					 				</p>";
							
                        }
                        
                    ?>
                        
                </div>
                <div class="col-lg-2 col-xs-1"></div>                                                            
            </div>
            <div class="row">&nbsp;</div>
        </div>
    </div>  
 
    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>