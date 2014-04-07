<?php 
    session_start();
    include_once '../../plantillas/importaciones.php';
	include_once '../../funciones/core.php';
	include_once '../../funciones/admin.php';    
?>
<script>
	$(document).ready(function(){
	$(function(){
	$("#myTable").tablesorter();
	});
	});
</script>

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
                <div id="" class="col-sm-10 col-xs-12">
                	<h3><i class="fa fa-bell"></i> Altas nuevas</h3> 
                	<hr class="grisdoble"/>
                	
		                	<table id="myTable" class="table table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th>Tipo</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody> 
									 <tr><td>Propietario</td><td>Aaron</td><td>13-10-2010</td><td>Sí</td></tr>
									 <tr><td>Inqulino</td><td>Juan</td><td>1-10-2012</td><td>Sí</td></tr>
									 <tr><td>Inqulino</td><td>Pedro</td><td>1-10-2012</td><td>Sí</td></tr>
									 <tr><td>Propietario</td><td>Jesús</td><td>10-7-2011</td><td>Sí</td></tr>
									 <tr><td>Propietario</td><td>David</td><td>28-8-2010</td><td>No</td></tr>
									 <tr><td>Inqulino</td><td>Lucas</td><td>28-8-2010</td><td>No</td></tr>
									 <tr><td>Inqulino</td><td>Antonio</td><td>17-6-2011</td><td>No</td></tr>
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