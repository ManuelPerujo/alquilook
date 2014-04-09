<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';    
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
                		<h3><i class="fa fa-envelope"></i> Mensajes:</h3>
                		<hr class="grisdoble"/>
                		
                	  <table class="table table-striped table-hover">
						   <thead>
							      <tr> 
								        <th></th>
								        <th>Estado</th>
								        <th>Nombre</th>
								        <th>Asunto</th>
								        <th>Fecha</th>
								        <th>Tipo</th>
								        <th><i class="fa fa-cog"></i></th>
							      </tr>
						    </thead>
						    <tbody>
								  <tr>
									    <td><img class="imagenboton3 coral-bg img-circle" src="<?php echo $ruta?>img/banner/inquilino.png"></td>
									    <td><h5><i class="fa fa-eye"></i> <i class="fa fa-envelope"></i> </h5></td>
									    <td><h5>Juan Pérez</h5></td>
								    	<td><h6 class="mayusculas">Me pica el pito...</h6></td>
									    <td><h6>18 / 05 / 2014</h6></td>
									    <td><h5>Propietario</h5></td>
									    <td>
									    	<h5>
									    		<a class="enlace" href="">
								 					<i class="fa fa-trash-o"></i>
								 				</a>
								 			</h5>	
								    	</td>
								  </tr>
							</tbody> 
						</table>
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