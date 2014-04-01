<?php 

	function get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden){
            
        $filtro = filtros_consulta_tabla($arrayFiltro);
        $orden = orden_consulta($arrayOrden);
        
        echo "<table class='table table-striped table-hover'>";
        echo "<tr>";
                       
        foreach ($arrayAtributos as $key => $value) {
            echo "<th>$value</th>";
        }
        
        if($arrayOpciones['opciones'] == TRUE){
            echo "<th>Opciones</th>";    
        }
        
        echo "</tr>";
        
        $bd = new core();
        $bd->ConectaBD();
        
        $seleccion = implode(",", $arrayAtributos);
        
        if(count($arrayFiltro) != 0){
            $query1 = "select $idTabla from $tabla where $filtro";
        }else{
            $query1 = "select $idTabla from $tabla";    
        }
        
        if(count($arrayOrden) != 0){
            $query1.= " ".$orden; 
        }
                    
        $result = $bd->query($query1);
        
        if($result->rowCount() != 0) {
            /*PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta*/ 
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($row as $key ) {
                $selector = $key[$idTabla];        
                $query2 = "select $seleccion from $tabla where $idTabla = '$selector' ";
                $result2 = $bd->query($query2);
                        
                if($result2->rowCount() != 0){
                    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                }
                        
                echo "<tr>";
                  
                $direccion =  "../admin/perfil_usuario_admin.php?$idTabla=".$selector."&tipo=".$row2['Tipo'];
                
                if(basename($_SERVER['PHP_SELF']) == ""){
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        echo "<td>$contenido</td>";
                    }
                }else{
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        echo "<td><a class='enlace2' href=$direccion>$contenido</a></td>";                
                    }
                }          
                
                
                if($arrayOpciones['opciones'] == TRUE){
                    echo "<td>";
                    if($arrayOpciones['borrar'] == TRUE){
                        $direccion1 = '../sesion/control_erase.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector;
                        echo "<a href=$direccion1 title='eliminar'><img src='../imagenes/iconos/eliminar.jpg' /></a>";    
                    }if($arrayOpciones['modificar'] == TRUE){
                        $direccion2 = '../sesion/control_up.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector.'&seleccion='.$seleccion;
                        echo "<a href=$direccion2 title='editar'><img src='../imagenes/iconos/editar.jpg' /></a>";    
                    }if($arrayOpciones['responder'] == TRUE){
                        $direccion3 = '../sesion/control_buzon_responder.php?id='.$selector;
                        echo "<a href=$direccion3 title='responder'><img src='../imagenes/iconos/responder.jpg' /></a>";
                    }if($arrayOpciones['pagar'] == TRUE){
                        
                    }if($arrayOpciones['amistad'] == TRUE){
                        $direccion4 = '../sesion/control_amistad.php?id='.$selector;
                        echo "<a href=$direccion4 title='agregar a amigos'><img src='../imagenes/iconos/amistad.jpg' /></a>";
                    }if($arrayOpciones['ver_mas'] == TRUE){
                        echo "<button id='ver_mas' onclick='showMensaje($selector);' title='ver mas'><img src='../imagenes/iconos/ver_mas.png' /></button>";
                    }
                    
                    echo "</td>";
                                  
                }
                echo "</tr>";
                    
            }
        }
          
        echo "</table>";
        
    }        
    
    function filtros_consulta_tabla($arrayFiltro){
     
        $texto = null;
        $count = 0;
        
        foreach ($arrayFiltro as $key => $value) {
            
            $tmp = array_keys($arrayFiltro,$value);
                        
            if(count($arrayFiltro) == 1){
                
                foreach ($tmp as $key2 => $value2) {
                    
                    $tmp2 = $value2." = ".$value;
                    $texto .= $tmp2;
                        
                }
                
            }else{
                
                $tmp3 = " and ";
                
                foreach ($tmp as $key2 => $value2) {
                    $count++;
                    if($count < count($arrayFiltro)){
                            
                        $tmp2 = $value2."=".$value;
                        $texto .= $tmp2.$tmp3;            
                        
                    }if($count == count($arrayFiltro)){
                        
                        $tmp2 = $value2."=".$value;
                        $texto .= $tmp2;
                        
                    }
                }
            }
        }    
                            
               
        return $texto;
    }
    
    function orden_consulta($arrayOrden){
        
        $texto = null;
        
        if(count($arrayOrden) == 3){
            
            $texto = "order by ".$arrayOrden[1]." ".$arrayOrden[2]." limit ".$arrayOrden[3];
                
        }if(count($arrayOrden) == 2){
            
            $texto = "order by ".$arrayOrden[1]." ".$arrayOrden[2];
            
        }
        
        return $texto;    
    }
	
	function get_inmueble_datos_admin($idUsuario){
		
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
			
													
			$colapse = get_colapse_admin($count);
			$facturaAgua = get_facturas_agua($value['IdInmueble'],$count);
			$facturaLuz = get_facturas_luz($value['IdInmueble'],$count);
			$facturaGas = get_facturas_gas($value['IdInmueble'],$count);
				
				$inmueble = "<div class='row'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenbanner steel-grey2 img-rounded' src='../../img/botones/inmueble.png'>
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
																		         <a class='enlace2'  data-toggle='collapse' data-parent='#accordion".$count."' href='#collapseTwo".$count."'>
																			        <i class='fa fa-user'></i> Cambios de inquilino
																			    </a>
																			 </h6>
																		</div>
																		<div id='collapseTwo".$count."' class='panel-collapse collapse'>
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
																		        <a class='enlace2'  data-toggle='collapse' data-parent='#accordion".$count."' href='#collapseThree".$count."'>
																		          <span class='glyphicon glyphicon-file'></span>Cambios de contrato
																		        </a>
																		     </h6>
																		</div>
																		    <div id='collapseThree".$count."' class='panel-collapse collapse'>
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
		                    </div>
		                    <br>"  ;
		                    
		                    array_push($arrayInmuebles,$inmueble);
							$inquilinos = null;
			
			 
		}
		
		$arrayIdInquilino = null;
		return $arrayInmuebles;
			
	}
	
	function get_colapse_admin($count){
			
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
	
	
?>	