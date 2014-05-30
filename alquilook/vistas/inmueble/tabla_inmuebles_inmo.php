<?php 

    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/inmueble.php';
	include_once '../../funciones/usuarios.php';
	include_once '../../funciones/admin.php';
    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>
    
     <?php
        include_once '../../plantillas/banner_inmo.php';
    ?>      



	<div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
                <?php
        			include_once '../panel/panel_inmobiliaria.php';
    			?> 
    			
                
                <div class="col-xs-10">
                	<div class="row-fluid">	
                	    <div class="col-xs-12">
                	    	<div class="row">
                	    		<div class="col-xs-12">
		                			<h3><i class="fa fa-folder-open"></i> Tus inmuebles</h3>
		                		</div>
		                	</div>
		                	
							<?php 
		                	
		                		if(isset($_SESSION['bienvenida']) && $_SESSION['bienvenida'] == TRUE){
		                			
									echo "<div class='row'>
					                		<br />
					                		<div class='col-sm-8 col-xs-12 text-center alert alert-success alert-dismissable'>
									               		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							 							<h3><i class='fa fa-info-circle fa-lg'></i> Para comenzar, haga click en 'Añadir inmueble'</h3>
								            </div>
								        </div>";
										
									unset($_SESSION['bienvenida']);	 
									
		                		}if(isset($_SESSION['up_exito'])){
											
									if($_SESSION['up_exito'] == TRUE){
								
										echo "<div class='row'>
										  		<div class='col-sm-6 text-left alert alert-success alert-dismissable'>
										       		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
									 				<h5><i class='fa fa-thumbs-up fa-lg'></i> &nbsp;&nbsp;Incidencia registrada!</h5>
						                		</div>
											  </div>";
									
										unset($_SESSION['up_exito']);
								
									}
		
								}                
				
                			?>
		                			                		                	
		                	<?php
		                	
		                		if(isset($_SESSION["IdUsuario_sesion"])){
		                				
          			
		                												
									$id_usuario = $_SESSION["IdUsuario_sesion"];

									$arrayInmuebles = get_inmueble_datos($id_usuario,$_SESSION['tipo']);
									
									
									foreach ($arrayInmuebles as $key => $value) {
										
										echo $value;
										unset($arrayInmuebles);
									}
									
		                			
										
		                		} 
		                		
		                	?>
		                	
		                	<div class="row">
                	    			<div class='col-sm-5 col-xs-12'>
		                					<div class='media'>
												  <a class='pull-left'>
												    <img class='imagenbanner2' src='../../img/botones/inmueble.png' alt='...'>
												  </a>
												  <div class='media-body'>
												    <h5 class='media-heading'>Dirección inmueble</h5>
												    <hr class='grissimple'/>
												    <small>Tipo de inmueble</small>
												    <hr class='grissimple'/>
												    <h6 class='media-heading negro'><small class='gris'>Plan de contrato:</small>&nbsp;Mini</h6>
												    <h6 class='media-heading negro'><small class='gris'>Precio:</small>&nbsp;300 €</h6>
												    <h6 class='media-heading negro'><small class='gris'>Metros:</small>&nbsp;50 metros</h6>
												    <h6 class='media-heading negro'><small class='gris'>Estancias:</small>&nbsp;3 habitaciones<small class='gris'>&nbsp;y</small>&nbsp;2 aseos</h6>
												  </div>
				                       		</div>
				                    </div>
				                    <div class='col-sm-5 col-xs-12'>
		                					<div class='media'>
												  <a class='pull-left'>
												    <img class='imagenbanner2' src='../../img/botones/propietario.png' alt='...'>
												  </a>
												  <div class='media-body'>
												    <h5 class='media-heading'>Nombre y apellidos propietario</h5>
												    <hr class='grissimple'/>
												    <small>Propietario</small>
												    <hr class='grissimple'/>
												    <h6 class='media-heading negro'><small class='gris'>DNI:</small>&nbsp;74555888S</h6>
												    <h6 class='media-heading negro'><small class='gris'>Teléfono:</small>&nbsp;655888999</h6>
												    <h6 class='media-heading negro'><small class='gris'>Email:</small>&nbsp;mandingo@gmail.com</h6>
												  </div>
				                       		</div>
				                    </div>
				                    <hr class="grisdoble"/>
		                	</div>           		                    
		             </div>            
                </div> 
             
             </div>
        </div>
    </div>  
   
   </div>
    
   <?php
        include_once '../../plantillas/pie_inmo.php';
    ?>        
    
    
    

   
</body>
</html>