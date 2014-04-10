<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';    
?>

<body>
    <?php
        include_once '../../plantillas/cabecera.php';
    ?>   
    <?php
        include_once '../../plantillas/banner_inq.php';
    ?>  
    
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->
    <div class="section">
        <div class="container-fluid">
            <div class="row-fluid">
            	
				<?php
        			include_once '../panel/panel_inquilino.php';
    			?> 
                
                <!--------------------------------------------------------Columna Dcha----------------------->
                <div class="col-xs-10">
                		<h3><i class="fa fa-envelope-o"></i> Mensaje:</h3>
	                	<table class="table table-striped table-hover">
						   <thead>
							      <tr> 
								        <th></th>
								        <th>Estado</th>
								        <th>Remitente</th>
								        <th>Asunto</th>
								        <th>Fecha</th>
								        <th><i class="fa fa-cog"></i></th>
							      </tr>
						    </thead>
						    <tbody>
								  <tr>
									    <td><img class="imagenboton3 steel-grey2 img-circle" src="<?php echo $ruta?>img/botones/admin.png"></td>
									    <td><h5><i class="fa fa-eye"></i> <i class="fa fa-envelope"></i> </h5></td>
									    <td><h5>Administrador</h5></td>
								    	<td><h6 class="mayusculas">Me pica el pito...</h6></td>
									    <td><h6>18 / 05 / 2014</h6></td>
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
                	<br/>
                </div> 
                <!--------------------------------------------------------Columna Dcha----------------------->                                                                          
            </div>
        </div>
    </div>  
    <!-------------------------------------------------------------------------------------------------------------------------------Panel Propietario----------------------->

    <?php
        include_once '../../plantillas/pie.php';
    ?>        
    
</body>
</html>