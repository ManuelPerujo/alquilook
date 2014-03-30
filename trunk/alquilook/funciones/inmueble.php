<?php 

	function get_inmueble_datos($idUsuario){
		
		$arrayInmuebles = array();
		
		$bd = new core();
		
		$idPropietario = get_IdPropietario($idUsuario);
		
		$query = "select * from inmueble where IdPropietario = '$idPropietario'";
		
		$result = $bd->query($query);
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		$inquilinos = null;
		$count = null;
		
		foreach ($row as $key => $value) {
			
			$count++;
			
			$arrayIdInquilino = explode("-", $value['ArrayIdInquilino'],-1);
						
			$arrayIdUsuario = get_IdInquilinoToUsuario($arrayIdInquilino);
			
			foreach ($arrayIdUsuario as $key2 => $value2) {
				
				$query2 = "select usuarios.Nombre, usuarios.Apellidos from usuarios inner join inquilino where usuarios.IdUsuario = '$value2' limit 1";
				$result2 = $bd->query($query2);
				$row2 = $result2->fetch(PDO::FETCH_ASSOC);
				
				$inquilinos .= "<p class='ficha'><span class='glyphicon glyphicon-user'></span> Inquilino: ".$row2['Nombre']." ".$row2['Apellidos']."</p>";
			}
			
													
			$colapse = get_colapse($count);
			$facturaAgua = get_facturas_agua($value['IdInmueble'],$count);
			$facturaLuz = get_facturas_luz($value['IdInmueble'],$count);
			$facturaGas = get_facturas_gas($value['IdInmueble'],$count);
				
				$inmueble = "<div class='row'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenbanner magenta-bg img-rounded' src='../../img/botones/inmueble.png'>
												  </a>
												  <div class='media-body'>
												    <h5 class='media-heading'>".$value['Direccion']."</h5>
												    <hr class='grissimple'/>
												    <small>".$value['TipoInmueble']."</small>
												    <hr class='grissimple'/>
												    <p class='ficha'>".$value['Metros']."</p>
												    <p class='ficha'>".$value['NumHabitaciones']." habitaciones / ".$value['NumServicios']." aseo</p>
												    ".$inquilinos."
												  </div>
				                       		</div>	
				                       	</div>	
				                       	
										".$colapse."
										
								</div>
						</div>
						<hr class='grisdoble'/>
							
		                    <div class='row'>
                	    		<div class='col-xs-12'>	  
				                    ".$facturaLuz
				                    .$facturaAgua
				                    .$facturaGas
				                    ."<div id='incidencia".$count."' class='collapse'>
				                      		 <div class='row lineaabajo'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/incidencias.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Crear incidencia</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>	
														     <div class='panel-group' id='accordion'>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		        <a class='enlace2' data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
																		           <i class='fa fa-warning'></i> Incidencias varias
																		        </a>
																		      </h6>
																		</div>
																		<div id='collapseOne' class='panel-collapse collapse'>
																		     <div class='panel-body negro'>
																		     	<form class='form-group text-left' method='post' action=''>
																					<textarea placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<button type='submit' class='btn btn-default btn-sm'>Enviar</button>
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		         <a class='enlace2'  data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
																			        <i class='fa fa-user'></i> Cambios de inquilino
																			    </a>
																			 </h6>
																		</div>
																		<div id='collapseTwo' class='panel-collapse collapse'>
																		     <div class='panel-body negro'>
																		     	<form class='form-group text-left' method='post' action=''>
																		     		<input type='radio' name='radiogroup' value='option1' />
                																	Baja de inquilino<br/>
                																	<input type='radio' name='radiogroup' value='option2' />
               																		Añadir inquilino<br/>
               																		<input type='radio' name='radiogroup' value='option3' />
                																	Modificar datos de inquilino<br/><br/>
																					<textarea placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<button type='submit' class='btn btn-default btn-sm'>Enviar</button>
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		        <a class='enlace2'  data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
																		          <span class='glyphicon glyphicon-file'></span>Cambios de contrato
																		        </a>
																		     </h6>
																		</div>
																		    <div id='collapseThree' class='panel-collapse collapse'>
																		      <div class='panel-body negro'>
																		     	<form class='form-group text-left' method='post' action=''>
																		     		<input type='radio' name='radiogroup' value='option1' />
                																	Modificación de contrato<br/>
               																		<input type='radio' name='radiogroup' value='option3' />
                																	Darse de baja en Alquilook<br/><br/>
																					<textarea placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<button type='submit' class='btn btn-default btn-sm'>Enviar</button>
																		     	</form>	
																		     </div>
																		   </div>
																	</div>
															</div>     
							                 		</div> 	            
				                     		</div>
				                     </div>		
		                    	</div>
		                    </div>"  ;
		                    
		                    array_push($arrayInmuebles,$inmueble);
							$inquilinos = null;
			
			 
		}
		
		$arrayIdInquilino = null;
		return $arrayInmuebles;
			
	}

	function get_inquilino_inmueble($idInmueble){
			
		$bd = new core();
		
		$query = "select IdInquilino from inmueble where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		$query2 = "";
		
	}

	function get_facturas_agua($idInmueble,$count){
			
		$elementos = null;	
			
		$facturasAgua = "<div id='agua".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/agua.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Recibos de Agua</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";		
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Agua'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = get_fecha_compuesta($value['FechaEntrada'], $value['FechaSalida']);
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		return $facturasAgua;	
		
	}

	function get_facturas_luz($idInmueble,$count){
		
		$elementos = null;	
			
		$facturasLuz = "<div id='luz".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/luz.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Recibos de Luz</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";		
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Luz'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = get_fecha_compuesta($value['FechaEntrada'], $value['FechaSalida']);
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		return $facturasLuz;
		
	}

	function get_facturas_gas($idInmueble,$count){
		
		$elementos = null;	
			
		$facturasGas = "<div id='gas".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/gas.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Recibos de Gas</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";		
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Gas'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = get_fecha_compuesta($value['FechaEntrada'], $value['FechaSalida']);
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		return $facturasGas;
		
	}

	function get_colapse($count){
			
		$mensaje = "<div class='row-fluid iconosmovil text-center'>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse' data-target='#luz".$count."'>
                    								<img class='imagenboton3 magenta-bg  img-rounded' src='../../img/botones/luz.png'>
						                       		<p class='ficha'>Electricidad</p>
						                       	</a>	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                       	<a class='enlace2' data-toggle='collapse' data-target='#agua".$count."'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='../../img/botones/agua.png'>
							                       	<p class='ficha'>Agua</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#gas".$count."'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='../../img/botones/gas.png'>
							                       	<p class='ficha'>Gas</p>
							                    </a>   		
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' href='' target='_blank'>
				                       				<img class='imagenboton3 magenta-bg img-rounded' src='../../img/botones/contrato.png'>
				                       				<p class='ficha'>Contrato</p>
				                       			</a>	
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#incidencia".$count."'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='../../img/botones/incidencias.png'>
							                       	<p class='ficha'>Crear incidencia</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#historial".$count."'>
							                       	<img class='imagenboton3 magenta-bg img-rounded' src='../../img/botones/historial.png'>
							                       	<p class='ficha'>Ver incidencias</p>
							                    </a>   	
				                       		</div>
										</div>";
											
		return $mensaje;
		
	}

	function get_fecha_compuesta($fechaInicial,$fechaFinal){
				
		$format = "YY ([ \t.-])* m";	
				
		$fecha1 = date($format,$fechaInicial);	
		$fecha2 = date($format,$fechaFinal);
		
		$fecha = $fecha1.'/'.$fecha2;
		
		return $fecha;
		
	}

	function get_IdInquilinoToUsuario($arrayIdInquilino){
				
		$arrayId = array();	
						
		$bd = new core();
						
		foreach ($arrayIdInquilino as $key => $value) {
				
			$query = "SELECT IdUsuario FROM inquilino WHERE IdInquilino = '$value'";
			$result = $bd->query($query);
						
			$row = $result->fetch(PDO::FETCH_ASSOC);
			
			array_push($arrayId,$row['IdUsuario']) ;
			
		}
		
		return $arrayId;
	}





















?>