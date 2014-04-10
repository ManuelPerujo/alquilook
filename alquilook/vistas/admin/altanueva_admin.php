<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera_admin.php';
    ?>   
    <?php
        include_once '../../plantillas/banner_admin.php';
    ?>  
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_admin.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-sm-10 col-xs-12">
                			<h3><i class="fa fa-bell"></i> Alta nueva</h3>
	                		<hr class="grisdoble"/>
							<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton img-circle" src="<?php echo $ruta?>img/botones/propietario.png">
		                		 </div>
	                			<div class="col-xs-5">   	
					                	<h5 class="media-heading mayusculas">Propietario:</h5>
						                	Nombre y apellidos:
						                	<p class="ficha mayusculas">Juan Perez</p>
						                	DNI:
						                	<p class="ficha mayusculas">45625988K</p>
						                	Domicilio:
						                	<p class="ficha mayusculas">C/ Ola k ase, 26</p>
						                	CP:
						                	<p class="ficha mayusculas">21596</p>
						                	Población:
						                	<p class="ficha mayusculas">Utrera</p>
						                	Provincia:
						                	<p class="ficha mayusculas">Segovia</p>
		                		 </div>
		                		 <div class="col-xs-5">	
					                	<h5 class="media-heading">Datos de contacto:</h5>
						                	Email:
						                	<p class="ficha">ortoherido@gmail.com</p>
						                	Teléfono:
						                	<p class="ficha mayusculas">659 852 647</p>
		                		 </div>
	        				</div>
	        				<hr class="grissimple"/>
	                		<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton img-circle" src="<?php echo $ruta?>img/botones/inquilino.png">
		                		 </div>
	                			<div class="col-xs-5">   	
					                	<h5 class="media-heading mayusculas">inquilino:</h5>
						                	Nombre y apellidos:
						                	<p class="ficha mayusculas">Diego Lopez</p>
						                	DNI:
						                	<p class="ficha mayusculas">45625988K</p>
						                	Domicilio:
						                	<p class="ficha mayusculas">C/ Ola k ase, 26</p>
		                		 </div>
		                		 <div class="col-xs-5">	
					                	<h5 class="media-heading">Datos de contacto:</h5>
						                	Email:
						                	<p class="ficha">ortoherido@gmail.com</p>
						                	Teléfono:
						                	<p class="ficha mayusculas">659 852 647</p>
		                		 </div>
	        				</div>
	        				<hr class="grissimple"/>
	                		<div class="row">
								<div class="col-xs-2">   	
					                <img class="imagenboton steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/inmueble.png">
		                		 </div>
	                			<div class="col-xs-5">   	
					                	<h5 class="media-heading mayusculas">inmueble:</h5>
						                	Tipo de inmueble:
						                	<p class="ficha mayusculas">Vivienda</p>
						                	Tipo de vía:
						                	<p class="ficha mayusculas">Calle</p>
						                	Nombre de vía:
						                	<p class="ficha mayusculas">Ramón Carande</p>
						                	Número:
						                	<p class="ficha mayusculas">6</p>
						                	Piso / Puerta:
						                	<p class="ficha mayusculas">5º 4B</p>
						                	Municipio:
						                	<p class="ficha mayusculas">Conil</p>
						                	CP:
						                	<p class="ficha mayusculas">12690</p>
						                	Provincia:
						                	<p class="ficha mayusculas">Segovia</p>
						                	Nº de metros:
						                	<p class="ficha mayusculas">500</p>
						                	Nº de habitaciones:
						                	<p class="ficha mayusculas">268</p>
						                	Nº de aseos:
						                	<p class="ficha mayusculas">8</p>
		                		 </div>
		                		 <div class="col-xs-5">	
					                	<h5 class="media-heading">Datos de mobiliario y electrodomésticos:</h5>
						                	<div class="fondogris">
								                	<p class="ficha mayusculas">Salón</p>
								                	Mobiliario:
								                	<p class="ficha">Sofá=2<br/>Cama doble=2</p>
								                	Electrodomésticos:
								                	<p class="ficha">Nevera=2<br/>Cama doble=2</p>
								             </div> 
								             <div class="fondogris">
								                	<p class="ficha mayusculas">Cocina</p>
								                	Mobiliario:
								                	<p class="ficha">Sofá=2<br/>Cama doble=2</p>
								                	Electrodomésticos:
								                	<p class="ficha">Nevera=2<br/>Cama doble=2</p>
								             </div> 
		                		 </div>
		                		 <hr class="grisdoble"/>
	        				</div>	
	        				<div class="row">
								<div class="col-xs-12 text-center">
									<a href="" class="btn btn-default btn-lg"><i class="fa fa-file-text"></i> Generar Contrato PDF</a>	
				        			<br/><br/>
								</div>
							</div>		
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie_admin.php';
    ?>        
    
</body>
</html>