<?php 

	function get_inmueble_datos($idUsuario,$tipo){
		
		$arrayInmuebles = array();
		
		$bd = new core();
		
		if($tipo == 'Propietario'){
			
			$idPropietario = get_IdPropietario($idUsuario);
		
			$query = "select * from inmueble where IdPropietario = '$idPropietario'";
				
			$result = $bd->query($query);
			$row = $result->fetchAll(PDO::FETCH_ASSOC);	
			
		}if($tipo == 'Inquilino'){
			
			$query = "select IdInmueble from inquilino where IdUsuario = '$idUsuario'";
			
			$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
			
			$idInmueble = $row['IdInmueble'];
			
			$query11 = "select * from inmueble where IdInmueble = '$idInmueble'";
			
			$result11 = $bd->query($query11); $row = $result11->fetchAll(PDO::FETCH_ASSOC);
			
		}
		
		
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
			
													
			$colapse = get_colapse($value['IdInmueble'], $count);
			$facturaAgua = get_facturas_agua($value['IdInmueble'],$count);
			$facturaLuz = get_facturas_luz($value['IdInmueble'],$count);
			$facturaGas = get_facturas_gas($value['IdInmueble'],$count);
			$documentos = get_documentos($value['IdInmueble'], $count);
			$galeria = get_galeria($value['IdInmueble'], $count);
			$historialIncidencias = get_tabla_historial_incidencias($value['IdInmueble']);
				
				$inmueble = "<hr class='grisdoble'/><br/>
							 <div class='row'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenbanner' src='../../img/botones/inmueble.png'>
												  </a>
												  <div class='media-body'>
												    <h5 class='media-heading'>".$value['Direccion']."</h5>
												    <hr class='grissimple'/>
												    <small>".$value['TipoInmueble']."</small>
												    <hr class='grissimple'/>
												    <p class='ficha'>Tipo de contrato: ".$value['TipoContrato']."</p>
												    <p class='ficha'>".$value['Metros']." metros</p>
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
				                    .$documentos
				                    ."<div id='incidencia".$count."' class='collapse'>
				                      		 <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/incidencias2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Crear incidencias</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>	
														     <div class='panel-group' id='accordion".$count."'>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		        <a class='enlace2' data-toggle='collapse' data-parent='#accordion".$count."' href='#collapseOne".$count."'>
																		           <i class='fa fa-warning'></i> Incidencias varias
																		        </a>
																		      </h6>
																		</div>
																		<div id='collapseOne".$count."' class='panel-collapse collapse'>
																		     <div class='panel-body negro'>
																		     	<form class='form-group text-left' enctype='multipart/form-data' method='post' action='../../controladores/control_up_incidencias_varias.php'>
																					<input type='text' name='' placeholder='Asunto'/><br/><br/>
																					<textarea name='contenido' placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<i class='fa fa-paperclip'></i> Adjuntar un archivo:
																					<input type='file' name='userfile' /><br/>
																					<input type='hidden' name='idInmueble' value='".$value['IdInmueble']."' />
																					<input type='submit' class='btn btn-default btn-sm' value='Enviar' />
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		         <a class='enlace2'  data-toggle='collapse' data-parent='#accordion".$count."' href='#collapseTwo".$count."'>
																			        <i class='fa fa-key'></i> Cambios de inquilino
																			    </a>
																			 </h6>
																		</div>
																		<div id='collapseTwo".$count."' class='panel-collapse collapse'>
																		     <div class='panel-body negro'>
																		     	<form class='form-group text-left' method='post' action='../../controladores/control_up_cambios_inquilino.php'>
																		     		<input type='hidden' name='idInmueble' value='".$value['IdInmueble']."' />
																		     		<input type='radio' name='subtipo' value='Baja de inquilino' />
                																	Baja de inquilino<br/>
                																	<input type='radio' name='subtipo' value='Añadir inquilino' />
               																		Añadir inquilino<br/>
               																		<input type='radio' name='subtipo' value='Modificar datos de inquilino' />
                																	Modificar datos de inquilino<br/><br/>
																					<textarea name='contenido' placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<input type='submit' class='btn btn-default btn-sm' value='Enviar' />
																		     	</form>	
																		     </div>
																		</div>
																	</div>
																	<div class='panel panel-default'>
																		<div class='panel-heading'>
																		     <h6 class='panel-title'>
																		        <a class='enlace2'  data-toggle='collapse' data-parent='#accordion".$count."' href='#collapseThree".$count."'>
																		          <i class='fa fa-gavel'></i> Cambios de contrato
																		        </a>
																		     </h6>
																		</div>
																		    <div id='collapseThree".$count."' class='panel-collapse collapse'>
																		      <div class='panel-body negro'>
																		     	<form class='form-group text-left' method='post' action='../../controladores/control_up_cambios_contrato.php'>
																		     		<input type='hidden' name='idInmueble' value='".$value['IdInmueble']."' />
																		     		<input type='radio' name='subtipo' value='Modificación de contrato' />
                																	Modificación de contrato<br/>
               																		<input type='radio' name='subtipo' value='Darse de baja en Alquilook' />
                																	Darse de baja en Alquilook<br/><br/>
																					<textarea name='contenido' placeholder='Descripción de incidencia'></textarea><br/><br/>
																					<input type='submit' class='btn btn-default btn-sm' value='Enviar' />
																		     	</form>	
																		     </div>
																		   </div>
																	</div>
															</div>     
							                 		</div> 	            
				                     		</div>
				                     		".$historialIncidencias." 
				                     </div>
				                     ".$galeria."		
		                    	</div>
		                    </div>
		                    <br>"  ;
		                    
		                    array_push($arrayInmuebles,$inmueble);
							$inquilinos = null;
			
			 
		}
		
		$arrayIdInquilino = null;
		return $arrayInmuebles;
			
	}

	function get_facturas_agua($idInmueble,$count){
			
		$facturasAgua = null;
			
		$elementos = null;	
				
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Agua'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = $value['FechaEntrada']." / ".$value['FechaSalida'];
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
					
		}
		
		$facturasAgua = "<div id='agua".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/agua2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Recibos de Agua</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";
		
		return $facturasAgua;	
		
	}

	function get_facturas_luz($idInmueble,$count){
		
		$facturasLuz = null;
		
		$elementos = null;	
					
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Luz'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = $fecha = $value['FechaEntrada']." / ".$value['FechaSalida'];
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		$facturasLuz = "<div id='luz".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/luz2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Recibos de Electricidad</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";
		
		return $facturasLuz;
		
	}

	function get_facturas_gas($idInmueble,$count){
		
		$facturasGas = null;
		
		$elementos = null;	
						
		$bd = new core();
		
		$query = "select * from factura where IdInmueble = '$idInmueble' and Tipo = 'Gas'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$fecha = $value['FechaEntrada']." / ".$value['FechaSalida'];
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$fecha."&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		$facturasGas = "<div id='gas".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/gas2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Recibos de Gas</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";
		
		return $facturasGas;
		
	}

	function get_documentos($idInmueble,$count){
		
		$documentos = null;
		
		$elementos = null;	
						
		$bd = new core();
		
		$query = "select * from documento where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$titulo = $value['Titulo'];	
			$fecha = $value['FechaEntrada']." / ".$value['FechaSalida'];
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a class='enlace2' href='".$direccion."' target='_blank'>
							 <p class='ficha'>".$titulo."&nbsp;&nbsp;&nbsp;(".$fecha.")&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-file-text-o'></i></p></a>";	
			
		}
		
		$documento = "<div id='documento".$count."' class='collapse'>
				                            <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/contrato2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Documentos</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>".
							                        	$elementos
							                 		."</div>	                        
				                     		</div>
				              </div>";
		
		return $documento;
		
	}

	function get_galeria($idInmueble,$count){
		
		$galeria = null;
		
		$elementos = null;	
						
		$bd = new core();
		
		$query = "select * from foto where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query);
		
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
				
			$direccion = $value['Direccion_Contenido'];
					
			$elementos .= "<a href='$direccion' data-toggle='lightbox' class='col-xs-2'>
							 <img src='$direccion' class='img-responsive'>
						   </a>";	
			
		}
		
		$galeria = "<div id='galeria".$count."' class='collapse'>
				                      		 <div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/galeria2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Galería de imágenes</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>	
														     <div class='panel-group' id='accordion".$count."'>
																	<div class='row'>
														             ".$elementos."           
														             </div>
															</div>     
							                 		</div> 	            
				                     		  </div>
				                     	</div>";
		
		return $galeria;
		
	}

	function get_colapse($idInmueble,$count){
			
		$suministros = get_permiso_suministros($idInmueble);
		
		$luz = "<a class='enlace2' data-toggle='collapse' data-target='#luz".$count."'>
                 	<img class='imagenboton3' src='../../img/botones/luz.png'>
					<p class='ficha'>Electricidad</p>
				</a>";
		
		$agua = "<a class='enlace2' data-toggle='collapse' data-target='#agua".$count."'>
					<img class='imagenboton3' src='../../img/botones/agua.png'>
					<p class='ficha'>Agua</p>
				</a>";
		
		$gas = "<a class='enlace2' data-toggle='collapse' data-target='#gas".$count."'>
					<img class='imagenboton3' src='../../img/botones/gas.png'>
					<p class='ficha'>Gas</p>
				</a>";						                       	
		
		if($suministros['Luz'] == 0){
					
			$luz = "<img class='imagenboton3' src='../../img/botones/luz2.png'>
					<p class='ficha'>Electricidad</p>";	
			
		}if($suministros['Agua'] == 0){
					
			$agua = "<img class='imagenboton3' src='../../img/botones/agua2.png'>
					<p class='ficha'>Agua</p>";	
			
		}if($suministros['Gas'] == 0){
					
			$gas = "<img class='imagenboton3' src='../../img/botones/gas2.png'>
					<p class='ficha'>Gas</p>";	
			
		}
							
		$mensaje = "<div class='row-fluid iconosmovil text-center'>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			".$luz."	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                       	".$agua."   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	".$gas."   		
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse' data-target='#documento".$count."'>
				                       				<img class='imagenboton3' src='../../img/botones/contrato.png'>
				                       				<p class='ficha'>Documentos</p>
				                       			</a>	
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#incidencia".$count."'>
							                       	<img class='imagenboton3' src='../../img/botones/incidencias.png'>
							                       	<p class='ficha'>Incidencias</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#galeria".$count."'>
							                       	<img class='imagenboton3' src='../../img/botones/galeria.png'>
							                       	<p class='ficha'>Galería</p>
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

	function get_direccion_documento($idInmueble){
		
		$bd = new core();
		
		$query = "select Direccion_Contenido from documento where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['Direccion_Contenido'];	
		
	}

	function get_tabla_historial_incidencias($idInmueble){
		
		$bd = new core();
		
		$tabla = 'incidencia'; $idTabla = 'IdIncidencia'; $arrayAtributos = array(1=>'Fecha', 2=>'Tipo', 3=>'SubTipo', 4=>'EstadoIncidencia');
        $filtro = array('IdInmueble' => $idInmueble);
        $arrayOrden = array(1 => 'Fecha', 2=> 'desc');
        $arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE,
                         'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => FALSE, 'visto' => FALSE);
						   
        $mensaje = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$filtro,$arrayOpciones,$arrayOrden);
				
		$mensaje2 = "<div class='row lineaabajo'>
                	    							<div class='col-sm-1 col-xs-3'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/historial2.png'>
							                 		</div>  
							                 		<div class='col-sm-3 col-xs-9'>
							                 			<p class='ficha'><h5>Historial de incidencias</h5></p>
							                 		</div>
							                 		<div class='col-sm-8 col-xs-12'>
							                 		".$mensaje."
							                 		</div>
							                </div>";
											
		return $mensaje2;									
		
	}

	function get_permiso_suministros($idInmueble){
		
		$bd = new core();
		
		$suministros = array();
		
		$query = "select Agua,Luz,Gas from inmueble where IdInmueble = '$idInmueble'";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		foreach ($row as $key => $value) {
			
			$suministros[$key] = $value;
			
		}
		
		return $suministros;
		
	}





?>