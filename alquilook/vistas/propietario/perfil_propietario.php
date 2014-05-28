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
    
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_propietario.php';
    			?> 
                
               <div class="col-xs-10 columnadcha">
                	
                	
                	<div class="row">
                		<br />
                		<div class="col-sm-8 col-xs-12 text-center alert alert-success alert-dismissable">
				               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		 							<h3><i class="fa fa-thumbs-o-up fa-lg"></i> Ha registrado con éxito su inmueble e inquilino/os<br/><br/>
		 								A continuación Alquilook redactará el contrato y nos pondremos en contacto con usted en breve
		 							</h3>
			            </div>
			        </div>  
			    
			    	<div class="row">
                		<br />
                		<div class="col-sm-8 col-xs-12 text-center alert alert-success alert-dismissable">
				               		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		 							<h3><i class="fa fa-info-circle fa-lg"></i> Para comenzar, haga click en "Añadir inmueble"</h3>
			            </div>
			        </div>  
			    
			    </div> 
            </div>
        </div>
    </div>  

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>