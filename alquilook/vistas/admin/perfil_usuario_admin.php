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
                	<div class="row">
                	    		<div class="col-sm-12">
		                			<h3><i class="fa fa-user"></i> Perfil usuario</h3>
		                		</div>
		            </div>
		            
		            <!-------------------------------------------------------- Contenido fijo----------------------->
		            <hr class="grisdoble"/><br/>
                	<div class="row">
                	    		<div class="col-xs-12">	
				                        <div class="row-fluid">
				                       		<div class="col-sm-6 media">
												  <a class="pull-left">
												    <img class="imagenboton magenta-bg img-rounded" src="<?php echo $ruta?>img/banner/propietario.png">
												  </a>
												  <div class="media-body">
												    <h5 class="media-heading">Madurito_Guasón46</h5>
												    <hr class="grissimple"/>
												    <small class="mayusculas">Propietario</small>
												    <hr class="grissimple"/>
												    <p class="ficha">Juan Pérez Hidalgo</p>
												    <p class="ficha">25887996R</p>
												    <p class="ficha"><a class="enlace" href="mailto:">juanperez@gmail.com</a></p>
												    <p class="ficha">689 256 458</p>
													<p class="ficha">C/ Calavera, 18. 29400 Ronda (Málaga)</p>
												  </div>
				                       		</div>	
				                       	</div>	
				                       	<div class="row-fluid iconosmovil text-center">
				                       		<div class="col-xs-4 col-sm-2 text-center">
				                       			<a class="enlace2" data-toggle="collapse" data-target="#luz">
                    								<img class="imagenboton3 steel-grey2  img-rounded" src="<?php echo $ruta?>img/botones/luz.png">
						                       		<p class="ficha">Electricidad</p>
						                       	</a>	
						                    </div>
						                    <div class="col-xs-4 col-sm-2 text-center">	
						                       	<a class="enlace2" data-toggle="collapse" data-target="#agua">
							                       	<img class="imagenboton3 steel-grey2 img-rounded" src="<?php echo $ruta?>img/botones/agua.png">
							                       	<p class="ficha">Agua</p>
							                    </a>   	
						                    </div>
						                    <div class="col-xs-4 col-sm-2 text-center">	
						                    	<a class="enlace2" data-toggle="collapse" data-target="#gas">
							                       	<img class="imagenboton3 steel-grey2 img-rounded" src="<?php echo $ruta?>img/botones/gas.png">
							                       	<p class="ficha">Gas</p>
							                    </a>   		
				                       		</div>
				                       		<div class="col-xs-4 col-sm-2 text-center">
				                       			<a class="enlace2" data-toggle="collapse" data-target="#contrato">
				                       				<img class="imagenboton3 steel-grey2 img-rounded" src="<?php echo $ruta?>img/botones/contrato.png">
				                       				<p class="ficha">Contrato</p>
				                       			</a>	
				                       		</div>
				                       		<div class="col-xs-4 col-sm-2 text-center">
				                       			<a class="enlace2" data-toggle="collapse"  data-target="#incidencia">
							                       	<img class="imagenboton3 steel-grey2 img-rounded" src="<?php echo $ruta?>img/botones/incidencias.png">
							                       	<p class="ficha">Crear incidencia</p>
							                    </a>   	
						                    </div>
						                    <div class="col-xs-4 col-sm-2 text-center">	
						                    	<a class="enlace2" data-toggle="collapse" data-target="#historial">
							                       	<img class="imagenboton3 steel-grey2 img-rounded" src="<?php echo $ruta?>img/botones/historial.png">
							                       	<p class="ficha">Ver incidencias</p>
							                    </a>   	
				                       		</div>
										</div>
								</div>
							</div>	 
							<hr class="grisdoble"/>
					  		<!-------------------------------------------------------- Contenido fijo----------------------->

							<!-------------------------------------------------------- Contenido desplegable----------------------->
		                    <div class="row">
                	    		<div class="col-xs-12">	  
				                    <div id="luz" class="collapse">
				                      		 <div class="row lineaabajo">
							                 		<div class="col-xs-12">
							                      		<div class="col-sm-1">	  
							                      			<img class="imagenbanner2" src="<?php echo $ruta?>img/botones/luz.png">
							                 			</div>  
							                 			<div class="col-sm-3">
							                 				<p class="ficha"><h5>Recibos de Luz</h5></p>
							                 			</div>
							                 			<div class="col-sm-8 col-xs-12">
								                 			<form class="form-inline  text-left" method="post" action="">
													 			<label>Subir nuevo recibo</label>
													            <input type="file" />
													            <br/>
													            <hr class="grissimple"/>
													            <br/>
													            <label>Periodo de factura</label><br/>
													            <input type="date" /> &nbsp;&nbsp;&nbsp; <input type="date" />
													 			<br/><br/>
													 			<a type="submit" class="btn btn-default btn-sm">Subir</a>
													 			<br/><br/>
													 		</form>
													 	</div>
													 </div>	
													 <div class="col-xs-12">
													 		<hr class="grissimple"/>
								                        	<table class="table table-striped table-hover">
																   <thead>
																	      <tr> 
																		        <th><i class="fa fa-bars"></i></th>
																		        <th>Fecha</th>
																		        <th>Opciones</th>
																	      </tr>
																    </thead>
																    <tbody>
																		  <tr>
																			    <td>1</td>
																			    <td>04/05/2014 - 04/06/2014</td>
																			    <td>
																			    	<a href="" target="_blank" class="enlace"><i class="fa fa-eye"></i></a>
																			    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																			    	<a href="" class="enlace"><i class="fa fa-trash-o"></i></a>
																				</td>
																		  </tr>
																		  <tr>
																			    <td>1</td>
																			    <td>04/05/2014 - 04/06/2014</td>
																			    <td>
																			    	<a href="" target="_blank" class="enlace"><i class="fa fa-eye"></i></a>
																			    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																			    	<a href="" class="enlace"><i class="fa fa-trash-o"></i></a>
																				</td>
																		  </tr>
																		  <tr>
																			    <td>1</td>
																			    <td>04/05/2014 - 04/06/2014</td>
																			    <td>
																			    	<a href="" target="_blank" class="enlace"><i class="fa fa-eye"></i></a>
																			    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																			    	<a href="" class="enlace"><i class="fa fa-trash-o"></i></a>
																				</td>
																		  </tr>
																	</tbody> 
															</table>
							                 		</div>	            
				                     		</div>
				                     </div>		
				                     <div id="agua" class="collapse">
				                            <div class="row lineaabajo">
                	    							<div class="col-sm-1">	  
							                      		<img class="imagenbanner2" src="<?php echo $ruta?>img/botones/agua.png">
							                 		</div>  
							                 		<div class="col-sm-3">
							                 			<p class="ficha"><h5>Recibos de Agua</h5></p>
							                 		</div>                      
				                     		</div>
				                     </div>
				                     <div id="gas" class="collapse">
				                            <div class="row lineaabajo">
                	    							<div class="col-sm-1">	  
							                      		<img class="imagenbanner2" src="<?php echo $ruta?>img/botones/gas.png">
							                 		</div>  
							                 		<div class="col-sm-3">
							                 			<p class="ficha"><h5>Recibos de Gas</h5></p>
							                 		</div>	            
				                     		</div>
				                     </div>
				                     <div id="incidencia" class="collapse">
				                      		 <div class="row lineaabajo">
                	    							<div class="col-sm-1">	  
							                      		<img class="imagenbanner2" src="<?php echo $ruta?>img/botones/incidencias.png">
							                 		</div>  
							                 		<div class="col-sm-3">
							                 			<p class="ficha"><h5>Crear incidencia</h5></p>
							                 		</div>          
				                     		</div>
				                     </div>		
		                    	</div>
		                    </div>  
		                    <!-------------------------------------------------------- Contenido desplegable----------------------->
                	
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