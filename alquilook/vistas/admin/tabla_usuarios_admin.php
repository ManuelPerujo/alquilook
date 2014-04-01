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
                <div id="users" class="col-sm-10 col-xs-12">
                	<h3><i class="fa fa-group"></i> Usuarios</h3> 
                	   <input class="search" placeholder="Search" />
						  <button class="btn btn-default btn-sm" data-sort="nombre">
						    Sort by name
						  </button>
					   <table class="table table-striped table-hover">
						    <tbody class="list">
								  <tr>
									    <td>1</td>
									    <td class="tipo">Propietario</td>
									    <td class="nombre">Juan</td>
									    <td class="apellido">Hidalgo</td>
									    <td class="dni">45889663L</td>
								  </tr>
								   <tr>
									    <td>2</td>
									    <td class="tipo">Inquilino</td>
									    <td class="nombre">Luis</td>
									    <td class="apellido">Suárez</td>
									    <td class="dni">25669663L</td>
								  </tr>
								   <tr>
									    <td>3</td>
									    <td class="tipo">Propietario</td>
									    <td class="nombre">Pedro</td>
									    <td class="apellido">García</td>
									    <td class="dni">96454663L</td>
								  </tr>
								   <tr>
									    <td>4</td>
									    <td class="tipo">Inqulino</td>
									    <td class="nombre">Pablo</td>
									    <td class="apellido">Gomez</td>
									    <td class="dni">66324663L</td>
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