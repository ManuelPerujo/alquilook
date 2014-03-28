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
							                 			<h5>Recibos de Electricidad</h5>
								                 			<form class="form-group  text-left" method="post" action="">
													 			<label>Subir nuevo recibo</label>
													            <input type="file" />
													 			<br/>
													 			<a type="submit" class="btn btn-default btn-sm">Subir</a>
													 		</form>
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
							                 		<div class="col-sm-8 col-xs-12">
							                        	<a class="enlace2" href="#" target="_blank"><p class="ficha">Mar / Abr 2014&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-text-o"></i></p></a>
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
							                 		<div class="col-sm-8 col-xs-12">
							                        	<a class="enlace2" href="#" target="_blank"><p class="ficha">Mar / Abr 2014&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-file-text-o"></i></p></a>
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
							                 		<div class="col-sm-8 col-xs-12">	
														     <div class="panel-group" id="accordion">
																	<div class="panel panel-default">
																		<div class="panel-heading">
																		     <h6 class="panel-title">
																		        <a class="enlace2" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
																		           <i class="fa fa-warning"></i> Incidencias varias
																		        </a>
																		      </h6>
																		</div>
																		<div id="collapseOne" class="panel-collapse collapse">
																		     <div class="panel-body negro">
																		     	<form class="form-group text-left" method="post" action="">
																					<textarea placeholder="Descripción de incidencia"></textarea><br/><br/>
																					<button type="submit" class="btn btn-default btn-sm">Enviar</button>
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class="panel panel-default">
																		<div class="panel-heading">
																		     <h6 class="panel-title">
																		         <a class="enlace2"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
																			        <i class="fa fa-user"></i> Cambios de inquilino
																			    </a>
																			 </h6>
																		</div>
																		<div id="collapseTwo" class="panel-collapse collapse">
																		     <div class="panel-body negro">
																		     	<form class="form-group text-left" method="post" action="">
																		     		<input type="radio" name="radiogroup" value="option1" />
                																	Baja de inquilino<br/>
                																	<input type="radio" name="radiogroup" value="option2" />
               																		Añadir inquilino<br/>
               																		<input type="radio" name="radiogroup" value="option3" />
                																	Modificar datos de inquilino<br/><br/>
																					<textarea placeholder="Descripción de incidencia"></textarea><br/><br/>
																					<button type="submit" class="btn btn-default btn-sm">Enviar</button>
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class="panel panel-default">
																		<div class="panel-heading">
																		     <h6 class="panel-title">
																		        <a class="enlace2"  data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
																		          <span class="glyphicon glyphicon-file"></span>Cambios de contrato
																		        </a>
																		     </h6>
																		</div>
																		    <div id="collapseThree" class="panel-collapse collapse">
																		      <div class="panel-body negro">
																		     	<form class="form-group text-left" method="post" action="">
																		     		<input type="radio" name="radiogroup" value="option1" />
                																	Modificación de contrato<br/>
               																		<input type="radio" name="radiogroup" value="option3" />
                																	Darse de baja en Alquilook<br/><br/>
																					<textarea placeholder="Descripción de incidencia"></textarea><br/><br/>
																					<button type="submit" class="btn btn-default btn-sm">Enviar</button>
																		     	</form>	
																		     </div>
																		   </div>
																	</div>
															</div>     
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