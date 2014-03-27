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
                <div class="col-sm-10 col-xs-8">
                	<h3><i class="fa fa-group"></i> Usuarios</h3>    
					   <table class="table table-striped table-hover">
						   <thead>
							      <tr> 
								        <th><i class="fa fa-bars"></i></th>
								        <th>Tipo</th>
								        <th>Nombre</th>
								        <th>Apellido</th>
								        <th>DNI</th>
							      </tr>
						    </thead>
						    <tbody>
								  <tr>
									    <td>1</td>
									    <td>Propietario</td>
									    <td>Juan</td>
									    <td>Hidalgo</td>
									    <td>45889663L</td>
								  </tr>
								   <tr>
									    <td>2</td>
									    <td>Inquilino</td>
									    <td>Luis</td>
									    <td>Suárez</td>
									    <td>25669663L</td>
								  </tr>
								   <tr>
									    <td>3</td>
									    <td>Propietario</td>
									    <td>Pedro</td>
									    <td>García</td>
									    <td>96454663L</td>
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