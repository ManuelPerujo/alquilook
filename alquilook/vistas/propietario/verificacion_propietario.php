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
    
    <!-------------------------------------------------------------------------------------------------------------------------------Log in-->
    <div class="section">
        <div class="container">
            <div class="row">&nbsp;</div>
            <div class="row">
                <div class="col-lg-2 col-xs-1"></div>
	 			<div class="col-lg-8 col-xs-10 text-center">
	 				
	 				<p>
	 					<h1><i class="fa fa-magic"></i> Ya casi está...</h1>
	 					<hr class="propietario"/>
	 					<h3>Sólo falta un paso más...</h3>
	 					<h2><i class="fa fa-spinner fa-spin"></i></h2>
	 					<h5>Vaya a su email para verificar su cuenta de Alquilook.</h5>
	 				</p>
	 				<br/><br/><br/>
	 				<p>
	 					<h1><i class="fa fa-thumbs-up"></i> ENHORABUENA</h1>
	 					<hr class="propietario"/>
	 					<h3>Se ha registrado correctamente</h3>	 					
	 					<h5>Haga click a continuación para ir a su panel de Propietario</h5>
	 					<a href="#"><button class="btn btn-primary btn-sm">Mi perfil</button></a>
	 					
	 				</p>
	 				
				
                    <?php 
                        if(isset($_SESSION['bienvenida']) && $_SESSION['bienvenida'] == true){
                            unset($_SESSION['bienvenida']);
                            echo "";
                        }
                    ?>
                        
                </div>
                <div class="col-lg-2 col-xs-1"></div>                                                            
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