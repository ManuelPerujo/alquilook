<?php 

	function get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden){
        
		$mensaje = null;
		    
        $filtro = filtros_consulta_tabla($arrayFiltro);
        $orden = orden_consulta($arrayOrden);
        
        $mensaje .= "<table id='myTable' class='tablesorter table table-striped table-hover'>";
        $mensaje .= "<thead><tr>";
                       
        foreach ($arrayAtributos as $key => $value) {
            $mensaje .= "<th>$value</th>";
        }
        
        if($arrayOpciones['opciones'] == TRUE){
            $mensaje .= "<th>Opciones</th>";    
        }
        
        $mensaje .= "</tr></thead>";
        
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
                        
                $mensaje .= "<tbody><tr>";
                
                if(basename($_SERVER['PHP_SELF']) == 'tabla_usuarios_admin.php'){
                	
					$direccion =  "../admin/perfil_usuario_admin.php?$idTabla=".$selector."&tipo=".$row2['Tipo'];
					
                }
                  
                
                
                if(basename($_SERVER['PHP_SELF']) == "perfil_usuario_admin.php"){
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        $mensaje .= "<td>$contenido</td>";
                    }
                }else{
                    foreach ($row2 as $key => $value2) {
                    							
                        $contenido = wordwrap($value2, 12);                            
                        $mensaje .= "<td><a class='enlace2' href=$direccion>$contenido</a></td>";                
                    }
                }          
                
                
                if($arrayOpciones['opciones'] == TRUE){
                    $mensaje .= "<td>";
                    if($arrayOpciones['responder'] == TRUE){
                        $direccion3 = '../sesion/control_buzon_responder.php?id='.$selector;
                        $mensaje .= "<a href=$direccion3 title='responder'><img src='../imagenes/iconos/responder.jpg' /></a>";
                    }if($arrayOpciones['pagar'] == TRUE){
                        
                    }if($arrayOpciones['amistad'] == TRUE){
                        $direccion4 = '../sesion/control_amistad.php?id='.$selector;
                        $mensaje .= "<a href=$direccion4 title='agregar a amigos'><img src='../imagenes/iconos/amistad.jpg' /></a>";
                    }if($arrayOpciones['ver_mas'] == TRUE){
                    	$direccionVer = '../../controladores/control_ver_mas.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector;
                        $mensaje .= "<a href=$direccionVer  title='ver mas' target='_blank'><i class='fa fa-eye'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }if($arrayOpciones['modificar'] == TRUE){
                        $direccion2 = '../sesion/control_up.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector.'&seleccion='.$seleccion;
                        $mensaje .= "<a href=$direccion2 title='editar'><i class='fa fa-pencil'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;";    
                    }if($arrayOpciones['borrar'] == TRUE){
                        $direccionBorrar = '../../controladores/control_borrar_item.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector;
                        $mensaje .= "<a href=$direccionBorrar title='eliminar'><i class='fa fa-trash-o'></i></a>";    
                    }
                    
                    $mensaje .= "</td>";
                                  
                }
                $mensaje .= "</tr></tbody>";
                    
            }
        }
          
        $mensaje .= "</table>";
		
		return $mensaje;
        
    }        
    
    function get_tablas_combinada_filtros_y_opciones($tabla1,$tabla2,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden){
    		
    	$filtro = filtros_consulta_tabla($arrayFiltro);
        $orden = orden_consulta($arrayOrden);
        
		$mensaje = null;
		
        $mensaje .= "<table class='table table-striped table-hover'>";
        $mensaje .= "<thead><tr>";
                       
        foreach ($arrayAtributos as $key => $value) {
            $mensaje .= "<th>$value</th>";
        }
        
        if($arrayOpciones['opciones'] == TRUE){
            $mensaje .= "<th>Opciones</th>";    
        }
        
        $mensaje .= "</tr><thead>";
        
        $bd = new core();
        $bd->ConectaBD();
        
        $seleccion = implode(",", $arrayAtributos);
        
        if(count($arrayFiltro) != 0){
            $query1 = "select $idTabla from $tabla1 inner join $tabla2 where $filtro";
        }else{
            $query1 = "select $idTabla from $tabla1 inner join $tabla2";    
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
                $query2 = "select $seleccion from $tabla1 where $idTabla = '$selector' ";
                $result2 = $bd->query($query2);
                       
                if($result2->rowCount() != 0){
                    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                }
                        
                $mensaje .= "<tbody><tr>";
                  
                $direccion =  "../admin/perfil_usuario_admin.php?$idTabla=".$selector;
                
                if(basename($_SERVER['PHP_SELF']) == ""){
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        $mensaje .= "<td>$contenido</td>";
                    }
                }else{
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        $mensaje .= "<td><a class='enlace2' href=$direccion>$contenido</a></td>";                
                    }
                }          
                
                
                if($arrayOpciones['opciones'] == TRUE){
                    $mensaje .= "<td>";
                    if($arrayOpciones['borrar'] == TRUE){
                        $direccion1 = '../sesion/control_erase.php?tabla='.$tabla1.'&idTabla='.$idTabla.'&id='.$selector;
                        $mensaje .= "<a href=$direccion1 title='eliminar'><img src='../imagenes/iconos/eliminar.jpg' /></a>";    
                    }if($arrayOpciones['modificar'] == TRUE){
                        $direccion2 = '../sesion/control_up.php?tabla='.$tabla1.'&idTabla='.$idTabla.'&id='.$selector.'&seleccion='.$seleccion;
                        $mensaje .= "<a href=$direccion2 title='editar'><img src='../imagenes/iconos/editar.jpg' /></a>";    
                    }if($arrayOpciones['responder'] == TRUE){
                        $direccion3 = '../sesion/control_buzon_responder.php?id='.$selector;
                        $mensaje .= "<a href=$direccion3 title='responder'><img src='../imagenes/iconos/responder.jpg' /></a>";
                    }if($arrayOpciones['pagar'] == TRUE){
                        
                    }if($arrayOpciones['amistad'] == TRUE){
                        $direccion4 = '../sesion/control_amistad.php?id='.$selector;
                        $mensaje .= "<a href=$direccion4 title='agregar a amigos'><img src='../imagenes/iconos/amistad.jpg' /></a>";
                    }if($arrayOpciones['ver_mas'] == TRUE){
                        $mensaje .= "<button id='ver_mas' onclick='showMensaje($selector);' title='ver mas'><img src='../imagenes/iconos/ver_mas.png' /></button>";
                    }
                    
                    $mensaje .= "</td>";
                                  
                }
                $mensaje .= "</tr><tbody>";
                    
            }
        }
          
        $mensaje .= "</table>";	
    	
		return $mensaje;
    }
	
    function filtros_consulta_tabla($arrayFiltro){
     
        $texto = null;
        $count = 0;
        
        foreach ($arrayFiltro as $key => $value) {
            
            $tmp = array_keys($arrayFiltro,$value);
                        
            if(count($arrayFiltro) == 1){
                
                foreach ($tmp as $key2 => $value2) {
                    
                    $tmp2 = $value2." = '".$value."'";
                    $texto .= $tmp2;
                        
                }
                
            }else{
                
                $tmp3 = " and ";
                
                foreach ($tmp as $key2 => $value2) {
                    $count++;
                    if($count < count($arrayFiltro)){
                            
                        $tmp2 = $value2."= '".$value."'";
                        $texto .= $tmp2.$tmp3;            
                        
                    }if($count == count($arrayFiltro)){
                        
                        $tmp2 = $value2."= '".$value."'";
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
	
	function get_inmueble_datos_admin($idUsuario, $tipo){
		
		$arrayInmuebles = array();
		
		$bd = new core();
		
		if($tipo == "Propietario"){
			
			$idPropietario = get_IdPropietario($idUsuario);
		
			$query = "select * from inmueble where IdPropietario = '$idPropietario'";	
			
		}if($tipo == "Inquilino"){
			
			$idInmueble = get_IdInmuebleFromInquilino($idUsuario);
			
			$query = "select * from inmueble where IdInmueble = '$idInmueble'";
			
		}
		
				
		$result = $bd->query($query);
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
		
		$inquilinos = null;
		$count = null;
		$count2 = null;
		
		foreach ($row as $key => $value) {
			
			$count++;
			
			$arrayIdInquilino = explode("-", $value['ArrayIdInquilino'],-1);
									
			$arrayIdUsuario = get_IdInquilinoToUsuario($arrayIdInquilino);
			
			$idPropietario = $value['IdPropietario'];
			
			$row4 = get_UsuarioFromInmueble($idPropietario);
						
			foreach ($arrayIdUsuario as $key2 => $value2) {
					
				$count2++;
				$send_mensaje_inquilino = send_mensaje_inquilino($value2, $count2);
				
								
				$query2 = "select usuarios.Nombre, usuarios.Apellidos from usuarios inner join inquilino where usuarios.IdUsuario = '$value2' limit 1";
				$result2 = $bd->query($query2);
				$row2 = $result2->fetch(PDO::FETCH_ASSOC);
				
				$inquilinos .= "<div class='row'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenboton2 steel-grey2 img-rounded' src='../../img/banner/inquilino.png'>
												  </a>
												  <div class='media-body'>
												   <h5 class='media-heading'><small class='negro mayusculas'>Inquilino:</small></h5>
												    <h5>".$row2['Nombre']." ".$row2['Apellidos']."</h5>
												  </div>
				                       		</div>	
				                       	</div>	
				                       	<div class='row-fluid iconosmovil text-center'>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#mensaje2".$count2."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/mensaje.png'>
							                       	<p class='ficha'>Mensaje</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#opciones2".$count2."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/opciones.png'>
							                       	<p class='ficha'>Opciones</p>
							                    </a>   	
				                       		</div>
										</div>
								</div>
							</div>	 
					  		<!-------------------------------------------------------- Contenido fijo INQUILINO----------------------->

							<!-------------------------------------------------------- Contenido desplegable INQUILINO----------------------->
		                    <div class='row'>
                	    		<div class='col-xs-12'>	  
				                    ".$send_mensaje_inquilino."	
				                     <div id='opciones2".$count2."' class='collapse'>
				                      		 <div class='row'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/opciones.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Opciones</h5></p>
								                 			
							                 		</div> 
							                 		<div class='col-sm-8 text-center'>
							                 				<p></p>
							                 				<a class='btn btn-default btn-sm' href='../../vistas/admin/editar_usuario_admin.php?idUsuario=".$value2."&tipo=Inquilino'>
							                 					<i class='fa fa-user'></i> Editar Inquilino
							                 				</a>
							                 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							                 				<a class='btn btn-default btn-sm' href=''>
							                 					<i class='fa fa-trash-o'></i> Borrar Inquilino
							                 				</a>
							                 		</div>         
				                     		</div>
				                     </div>			
		                    	</div>
		                    </div> ";
			}
			
													
			$colapse = get_colapse_admin($count);
			$facturaAgua = up_factura_agua_admin($value['IdInmueble'],$count);
			$facturaLuz = up_factura_luz_admin($value['IdInmueble'],$count);
			$facturaGas = up_factura_gas_admin($value['IdInmueble'],$count);
			$contrato = up_contrato($value['IdInmueble'], $count);
			$send_mensaje_propietario = send_mensaje_propietario($value['IdInmueble'], $count);
			$opciones = opciones($value['IdInmueble'], $count);
			
				
				$inmueble = "<div class='row fondogris'>
                	    		<div class='col-xs-12'>	
				                        <div class='row-fluid'>
				                       		<div class='col-sm-6 media'>
												  <a class='pull-left'>
												    <img class='imagenboton steel-grey2 img-rounded' src='../../img/banner/propietario.png'>
												  </a>
												  <div class='media-body'>
												    <h4 class='media-heading'>".$value['Direccion']." (".$value['Provincia'].")</h4>
												    <hr class='formulario'/>
												    <h5 class='media-heading'><small class='negro mayusculas'>Propietario</small>: ".$row4['Nombre']." ".$row4['Apellidos']."</h5>
												    <hr class='formulario'/>
												    <p class='ficha'>".$row4['DNI']."</p>
												    <p class='ficha'><a class='enlace2' href='mailto:'>".$row4['Email']."</a></p>
												    <p class='ficha'>".$row4['Telefono']."</p>
												  </div>
				                       		</div>	
				                       	</div>	
				                       	
										".$colapse."
										
								</div>
						</div>
						
							
		                    <div class='row'>
                	    		<div class='col-xs-12'>	  
				                    ".$facturaLuz
				                    .$facturaAgua
				                    .$facturaGas
				                    .$contrato
				                    .$send_mensaje_propietario
				                    .$opciones
				                    ."		
		                    	</div>
		                    </div>
		                    <br/><br/>"
		                    .$inquilinos;
		                    
		                    array_push($arrayInmuebles,$inmueble);
							$inquilinos = null;
			
			 
		}
		
		$count2 = null;
		$count = null;
		$arrayIdInquilino = null;
		return $arrayInmuebles;
			
	}
	
	function get_colapse_admin($count){
			
		$mensaje = "<div class='row-fluid iconosmovil text-center'>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse' data-target='#luz".$count."'>
                    								<img class='imagenboton3 steel-grey2  img-rounded' src='../../img/botones/luz.png'>
						                       		<p class='ficha'>Electricidad</p>
						                       	</a>	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                       	<a class='enlace2' data-toggle='collapse' data-target='#agua".$count."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/agua.png'>
							                       	<p class='ficha'>Agua</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#gas".$count."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/gas.png'>
							                       	<p class='ficha'>Gas</p>
							                    </a>   		
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#contrato".$count."'>
				                       				<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/contrato.png'>
				                       				<p class='ficha'>Contrato</p>
				                       			</a>	
				                       		</div>
				                       		<div class='col-xs-4 col-sm-2 text-center'>
				                       			<a class='enlace2' data-toggle='collapse'  data-target='#mensaje".$count."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/mensaje.png'>
							                       	<p class='ficha'>Mensaje</p>
							                    </a>   	
						                    </div>
						                    <div class='col-xs-4 col-sm-2 text-center'>	
						                    	<a class='enlace2' data-toggle='collapse' data-target='#opciones".$count."'>
							                       	<img class='imagenboton3 steel-grey2 img-rounded' src='../../img/botones/opciones.png'>
							                       	<p class='ficha'>Opciones</p>
							                    </a>   	
				                       		</div>
										</div>";
											
		return $mensaje;
		
	}
		
	function get_IdInmuebleFromInquilino($idUsuario){
			
		$bd = new core();
		
		$query = "select inquilino.IdInmueble from inquilino inner join usuarios where inquilino.IdUsuario = '$idUsuario'";	
		$result = $bd->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['IdInmueble'];
	}

	function get_UsuarioFromInmueble($idPropietario){
			
		$bd = new core();
				
		$query3 = "select IdUsuario from propietario where IdPropietario = $idPropietario";
		$result3 = $bd->query($query3);
		$row3 = $result3->fetch(PDO::FETCH_ASSOC);
			
		$idUsuarioPropietario = $row3['IdUsuario'];
			
		$query4 = "select * from usuarios where IdUsuario = '$idUsuarioPropietario'";
		$result4 = $bd->query($query4);
		$row4 = $result4->fetch(PDO::FETCH_ASSOC);	
		
		return $row4;
	}
	
	function get_IdUsuarioPropietarioFromInmueble($idInmueble){
				
		$bd = new core();
		
		$query = "select IdPropietario from inmueble where IdInmueble = '$idInmueble'";
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		$idPropietario = $row['IdPropietario'];
		
		$query2 = "select IdUsuario from propietario where IdPropietario = '$idPropietario'";	
		$result2 = $bd->query($query2);
		$row2 = $result2->fetch(PDO::FETCH_ASSOC);
		
		return $row2['IdUsuario'];
		
	}
	
	function up_factura_agua_admin($idInmueble, $count){
				
		$tabla = 'factura'; $idTabla = 'IdFactura'; $arrayAtributos = array(1=>'FechaEntrada',2=>'FechaSalida');
		$arrayFiltro = array('IdInmueble' => $idInmueble, 'Tipo' => 'agua');
		$arrayOrden = array(1 => 'FechaEntrada', 2=> 'desc');
		$arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => TRUE);	
		$mensajeTabla = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden);
				
		$mensaje = "<div id='agua".$count."' class='collapse'>
				                            <div class='row'>
							                 		<div class='col-xs-12'>
							                      		<div class='col-sm-1'>	  
							                      			<img class='imagenbanner2' src='../../img/botones/agua.png'>
							                 			</div>  
							                 			<div class='col-sm-3'>
							                 				<p class='ficha'><h5>Recibos de Agua</h5></p>
							                 			</div>
							                 			<div class='col-sm-8 col-xs-12'>
								                 			<form class='form-inline  text-left' enctype='multipart/form-data' method='post' action='../../controladores/control_up_agua.php'>
													 			<label>Subir nuevo recibo</label>
													            <input type='file' name='userfile' />
													            <br/>
													            <label>Periodo de factura</label><br/>
													            <input type='date' name='fechaInicio'/> &nbsp;&nbsp;&nbsp; <input type='date' name='fechaFinal' />
													 			<br/><br/>
													 			<input type='hidden' name='idInmueble' value='$idInmueble' />
													 			<input type='hidden' name='MAX_FILE_SIZE' value='3000' />
													 			<input type='submit' class='btn btn-default btn-sm' value='Subir'/>
													 			<br/><br/>
													 		</form>
													 	</div>
													 </div>	
													 <div class='col-sm-10 col-xs-12'>
								                        ".$mensajeTabla."	
							                 		</div>	            
				                     		</div>
				                     </div>";	
		
		return $mensaje;
		
	}
	
	function up_factura_luz_admin($idInmueble, $count){
				
		$tabla = 'factura'; $idTabla = 'IdFactura'; $arrayAtributos = array(1=>'FechaEntrada',2=>'FechaSalida');
		$arrayFiltro = array('IdInmueble' => $idInmueble, 'Tipo' => 'luz');
		$arrayOrden = array(1 => 'FechaEntrada', 2=> 'desc');
		$arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => TRUE);	
		$mensajeTabla = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden);	
				
		$mensaje = "<div id='luz".$count."' class='collapse'>
				                      		 <div class='row'>
							                 		<div class='col-xs-12'>
							                      		<div class='col-sm-1'>	  
							                      			<img class='imagenbanner2' src='../../img/botones/luz.png'>
							                 			</div>  
							                 			<div class='col-sm-3'>
							                 				<p class='ficha'><h5>Recibos de Luz</h5></p>
							                 			</div>
							                 			<div class='col-sm-8 col-xs-12'>
								                 			<form class='form-inline  text-left' enctype='multipart/form-data' method='post' action='../../controladores/control_up_luz.php'>
													 			<label>Subir nuevo recibo</label>
													            <input type='file' name='userfile' />
													            <br/>
													            <label>Periodo de factura</label><br/>
													            <input type='date' name='fechaInicio'/> &nbsp;&nbsp;&nbsp; <input type='date' name='fechaFinal' />
													 			<br/><br/>
													 			<input type='hidden' name='idInmueble' value='$idInmueble' />
													 			<input type='hidden' name='MAX_FILE_SIZE' value='3000' />
													 			<input type='submit' class='btn btn-default btn-sm' value='Subir'/>
													 			<br/><br/>
													 		</form>
													 	</div>
													 </div>	
													 <div class='col-sm-10 col-xs-12'>
								                        	".$mensajeTabla."
							                 		</div>	            
				                     		</div>
				                     </div>";	
		
		return $mensaje;
		
	}
	
	function up_factura_gas_admin($idInmueble, $count){
			
		$tabla = 'factura'; $idTabla = 'IdFactura'; $arrayAtributos = array(1=>'FechaEntrada',2=>'FechaSalida');
		$arrayFiltro = array('IdInmueble' => $idInmueble, 'Tipo' => 'gas');
		$arrayOrden = array(1 => 'FechaEntrada', 2=> 'desc');
		$arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => TRUE);	
		$mensajeTabla = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden);
				
		$mensaje = "<div id='gas".$count."' class='collapse'>
				                            <div class='row'>
							                 		<div class='col-xs-12'>
							                      		<div class='col-sm-1'>	  
							                      			<img class='imagenbanner2' src='../../img/botones/gas.png'>
							                 			</div>  
							                 			<div class='col-sm-3'>
							                 				<p class='ficha'><h5>Recibos de Gas</h5></p>
							                 			</div>
							                 			<div class='col-sm-8 col-xs-12'>
								                 			<form class='form-inline  text-left' enctype='multipart/form-data' method='post' action='../../controladores/control_up_gas.php'>
													 			<label>Subir nuevo recibo</label>
													            <input type='file' name='userfile' />
													            <br/>
													            <label>Periodo de factura</label><br/>
													            <input type='date' name='fechaInicio'/> &nbsp;&nbsp;&nbsp; <input type='date' name='fechaFinal' />
													 			<br/><br/>
													 			<input type='hidden' name='idInmueble' value='$idInmueble' />
													 			<input type='hidden' name='MAX_FILE_SIZE' value='3000' />
													 			<input type='submit' class='btn btn-default btn-sm' value='Subir'/>
													 			<br/><br/>
													 		</form>
													 	</div>
													 </div>	
													 <div class='col-sm-10 col-xs-12'>
								                        	".$mensajeTabla."
							                 		</div>	            
				                     		</div>
				                     </div>";	
		
		return $mensaje;
		
	}
			
	function up_contrato($idInmueble, $count){
				
		$tabla = 'contrato'; $idTabla = 'IdContrato'; $arrayAtributos = array(1=>'FechaEntrada',2=>'FechaSalida');
		$arrayFiltro = array('IdInmueble' => $idInmueble);
		$arrayOrden = array(1 => 'FechaEntrada', 2=> 'desc');
		$arrayOpciones = array('opciones' => TRUE, 'borrar' => TRUE, 'modificar' => FALSE, 'responder' => FALSE, 'pagar' => FALSE, 'amistad' => FALSE, 'ver_mas' => TRUE);	
		$mensajeTabla = get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden);	
				
		$mensaje = "<div id='contrato".$count."' class='collapse'>
				                      		 <div class='row'>
							                 		<div class='col-xs-12'>
							                      		<div class='col-sm-1'>	  
							                      			<img class='imagenbanner2' src='../../img/botones/contrato.png'>
							                 			</div>  
							                 			<div class='col-sm-3'>
							                 				<p class='ficha'><h5>Contrato</h5></p>
							                 			</div>
							                 			<div class='col-sm-8 col-xs-12'>
								                 			<form class='form-inline  text-left' enctype='multipart/form-data' method='post' action='../../controladores/control_up_contrato.php'>
													 			<label>Subir nuevo recibo</label>
													            <input type='file' name='userfile' />
													            <br/>
													            <label>Periodo de factura</label><br/>
													            <input type='date' name='fechaInicio'/> &nbsp;&nbsp;&nbsp; <input type='date' name='fechaFinal' />
													 			<br/><br/>
													 			<input type='hidden' name='idInmueble' value='$idInmueble' />
													 			<input type='hidden' name='MAX_FILE_SIZE' value='3000' />
													 			<input type='submit' class='btn btn-default btn-sm' value='Subir'/>
													 			<br/><br/>
													 		</form>
													 	</div>
													 </div>	
													 <div class='col-xs-12'>
								                        	".$mensajeTabla."
							                 		</div>	            
				                     		</div>
				                     </div>	";	
		
		return $mensaje;
		
	}

	function send_mensaje_propietario($idInmueble, $count){
				
		$idUsuario = null;	
				
		if($_GET['tipo'] == 'Propietario'){
					
			$idUsuario = $_GET['IdUsuario'];
			
		}if($_GET['tipo'] == 'Inquilino'){
				
			$idUsuario = get_IdUsuarioPropietarioFromInmueble($idInmueble);	
			
		}	
				
				
		$mensaje = "<div id='mensaje".$count."' class='collapse'>
				                      		 <div class='row'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/mensaje.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Escribir a propietario</h5></p>
								                 			
							                 		</div> 
							                 		<div class='col-xs-12'>
							                 			<form class='form-group  text-left' method='post' action='../../controladores/control_manda_mensaje.php'>
							                 					<input type='hidden' name='idUsuarioPropietario' value='$idUsuario' />
							                 					<input type='hidden' name='tipo' value='propietario' />
							                 					<input size='80' type='text' name='titulo' placeholder='Asunto'/> 
							                 					<br/><br/>
													 			<textarea name='contenido' placeholder='Escriba aquí su mensaje...'></textarea>
													 			<br/><br/>
													 			<input type='submit' class='btn btn-default btn-sm' value='Enviar'/>
													 	</form>
							                 		</div>         
				                     		</div>
				                     </div>";	
		
		return $mensaje;
		
	}

	function send_mensaje_inquilino($idInquilino, $count){
				
		
		$mensaje = "<div id='mensaje2".$count."' class='collapse'>
				                      		 <div class='row'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/mensaje.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Escribir a inquilino</h5></p>
								                 			
							                 		</div> 
							                 		<div class='col-xs-12'>
							                 			<form class='form-group  text-left' method='post' action='../../controladores/control_manda_mensaje.php'>
							                 					<input type='hidden' name='idUsuarioInquilino' value='$idInquilino' />
							                 					<input type='hidden' name='tipo' value='inquilino' />
							                 					<input size='80' type='text' name='titulo' placeholder='Asunto'/> 
							                 					<br/><br/>
													 			<textarea name='contenido' placeholder='Escriba aquí su mensaje...'></textarea>
													 			<br/><br/>
													 			<input type='submit' class='btn btn-default btn-sm' value='Enviar'/>
													 	</form>
							                 		</div>         
				                     		</div>
				                     </div>";
				                     
				                     
				                     	
		
		return $mensaje;
		
	}
			
	function opciones($idInmueble, $count){
			
		$idUsuario = $_GET['IdUsuario'];
		$tipo = $_GET['tipo'];	
			
		$mensaje = "<div id='opciones".$count."' class='collapse'>
				                      		 <div class='row'>
                	    							<div class='col-sm-1'>	  
							                      		<img class='imagenbanner2' src='../../img/botones/opciones.png'>
							                 		</div>  
							                 		<div class='col-sm-3'>
							                 			<p class='ficha'><h5>Opciones</h5></p>
								                 			
							                 		</div> 
							                 		<div class='col-sm-8 text-center'>
							                 				<p></p>
							                 				<a class='btn btn-default btn-sm' href='../../vistas/admin/editar_usuario_admin.php?idUsuario=".$idUsuario."&tipo=Propietario'>
							                 					<i class='fa fa-user'></i> Editar Propietario
							                 				</a>
							                 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							                 				<a class='btn btn-default btn-sm' href='../../vistas/admin/editar_inmueble_admin.php?idInmueble=".$idInmueble."'>
							                 					<i class='fa fa-home'></i> Editar Inmueble
							                 				</a>
							                 				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							                 				<a class='btn btn-default btn-sm' href=''>
							                 					<i class='fa fa-trash-o'></i> Borrar Propietario
							                 				</a>
							                 		</div>         
				                     		</div>
				                     </div>";	
		
		return $mensaje;
		
	}
	
	function modifica_propietario(){
    	 		
    	$idUsuario = $_GET['idUsuario'];
    	
    	$bd = new core();
    	
    	$query = "select * from usuarios where IdUsuario = '$idUsuario'";
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
    	    	    				
    	$direccion = $_SERVER['HTTP_REFERER'];
    	
    	$email = $row['Email'];	$nombre = $row['Nombre']; $apellidos = $row['Apellidos']; $dni = $row['DNI'];
    	$telefono = $row['Telefono']; $domicilio = $row['Domicilio']; $cp = $row['CP']; $poblacion = $row['Poblacion']; $provincia = $row['Provincia'];
    	    		 
    	$mensaje = "<form method='post' action='../../controladores/control_set_propietario.php' >
    							<input type='hidden' name='idUsuario' value='$idUsuario' />
    							<input type='hidden' name='direccion' value='$direccion' />                                    
		                        <input type='email' class='form-control' value='$email' name='email_propietario' placeholder='Email *' /> 
		                        <input type='text' class='form-control' value='$nombre' id='nombre' name='nombre_propietario' placeholder='Nombre *' />
		                        <input type='text' class='form-control' value='$apellidos' name='apellidos_propietario' placeholder='Apellidos *' /> 
		                        <input type='text' class='form-control' value='$dni' name='dni_propietario' placeholder='DNI *' />
		                        <input type='text' class='form-control' value='$telefono' name='telefono_propietario' placeholder='Teléfono *' /> 
		                        <input type='text' class='form-control' value='$domicilio' name='domicilio_propietario' placeholder='Domicilio *' />
		                        <input type='text' class='form-control' value='$cp' name='cp_propietario' placeholder='CP *' /> 
		                        <input type='text' class='form-control' value='$poblacion' name='poblacion_propietario' placeholder='Poblacion *' />
		                        <input type='text' class='form-control' value='$provincia' name='provincia_propietario' placeholder='Provincia *' />                       
		                        <small>* Campos obligatorios</small>
		                        <br/><br/>
		    					<input type='submit' class='btn btn-default btn-sm' value='Guardar' />
		    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    		</form>";
		    		
		return $mensaje;    			
    	  	
    }

	function modifica_inquilino(){
    		
    	$idUsuario = $_GET['idUsuario']; 		
    	    	
    	$bd = new core();
    	
    	$query = "select * from usuarios where IdUsuario = '$idUsuario'";
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
    	    	    				
    	$direccion = $_SERVER['HTTP_REFERER'];
    	
    	$email = $row['Email'];	$nombre = $row['Nombre']; $apellidos = $row['Apellidos']; $dni = $row['DNI'];
    	$telefono = $row['Telefono'];
    	    		 
    	$mensaje = "<form method='post' action='../../controladores/control_set_inquilino.php' >
    							<input type='hidden' name='idUsuario' value='$idUsuario' />
    							<input type='hidden' name='direccion' value='$direccion' />                                    
		                        <input type='email' class='form-control' value='$email' name='email_propietario' placeholder='Email *' /> 
		                        <input type='text' class='form-control' value='$nombre' id='nombre' name='nombre_propietario' placeholder='Nombre *' />
		                        <input type='text' class='form-control' value='$apellidos' name='apellidos_propietario' placeholder='Apellidos *' /> 
		                        <input type='text' class='form-control' value='$dni' name='dni_propietario' placeholder='DNI *' />
		                        <input type='text' class='form-control' value='$telefono' name='telefono_propietario' placeholder='Teléfono *' /> 
		                        <small>* Campos obligatorios</small>
		                        <br/><br/>
		    					<input type='submit' class='btn btn-default btn-sm' value='Guardar' />
		    					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    		</form>";
		    		
		return $mensaje;    			
    	  	
    }    
    
    function modifica_inmueble(){
    	 		
    	$idInmueble = $_GET['idInmueble'];
    					
    	$bd = new core();
    	
    	$query = "select * from inmueble where IdInmueble = '$idInmueble'";
		$result = $bd->query($query);
		$row = $result->fetch(PDO::FETCH_ASSOC);
    	    	    				
    	    	
    	$tipo = $row['TipoInmueble']; $direccion = $row['Direccion']; $cp = $row['CP'];
    	$poblacion = $row['Municipio']; $provincia = $row['Provincia'];
    	$numHabitacion = $row['NumHabitaciones']; $numAseos = $row['NumServicios']; $metros = $row['Metros']; 
    	    		 
    	$mensaje = "<form class='form-inline text-left' method='post' action='../../controladores/control_set_inmueble.php'>  		               		 	                                 
		                       <label><h6>Tipo de inmueble&nbsp;&nbsp;</h6></label> 
			                        <select class='selector' name='tipoInmueble' value='$tipo'>
									  <option value='Vivienda'>Vivienda</option>
									  <option value='Local_comercial'>Local comercial</option>
									  <option value='Garaje'>Garaje</option>
									  <option value='Finca Rustica'>Finca rústica</option>
									</select>
		                        <br/> 
		                        <label><h6>Dirección&nbsp;&nbsp;</h6></label>
		                         <br/>  
									<input type='text' class='form-control' name='direccion' placeholder='Direccion' value='$direccion' />
			                        <input type='text' class='form-control' name='municipio_inmueble' placeholder='Municipio' value='$poblacion' />                                   
			                        <input type='text' class='form-control' name='cp_inmueble' placeholder='Código postal' value='$cp' />
			                        <input type='text' class='form-control' name='provincia_inmueble' placeholder='Provincia' value='$provincia' /> 
		                         <br/>
		                        <label><h6>Nº de metros&nbsp;&nbsp;</h6></label> 
			                        <input type='text' class='form-control' name='metros_inmueble' placeholder='Metros' value='$metros' />
		                         <br/>
		                        <label><h6>Nº de habitaciones&nbsp;&nbsp;</h6></label> 
			                        <select class='selector' name='numero_habitaciones'>
			                          <option selected >$numHabitacion</option>
			                          <option value='0'>0</option>	
									  <option value='1'>1</option>
									  <option value='2'>2</option>
									  <option value='3'>3</option>
									  <option value='4'>4</option>
									  <option value='5'>5</option>
									</select>
		                         <br/>
		                        <label><h6>Nº de aseos&nbsp;&nbsp;</h6></label> 
			                        <select class='selector' name='numero_aseos'>
			                          <option selected >$numAseos</option>
			                          <option value='0'>0</option>
									  <option value='1'>1</option>
									  <option value='2'>2</option>
									  <option value='3'>3</option>
									</select>  
		                        <br/><br/>
		                        <input type='hidden' class='btn btn-default btn-sm' name='idInmueble' value='$idInmueble' />
		    					<input type='submit' class='btn btn-default btn-sm' value='Continuar' />
		                    </form>";
		    		
		return $mensaje;    			
    	  	
    } 
    
    function modifica_estancia(){
    	 		
    	$idInmueble = $_GET['idInmueble'];
    	$mensaje = null;
		
    	$bd = new core();
    	
    	$query = "select IdEstancia from estancia where IdInmueble = '$idInmueble'";
		$result = $bd->query($query);
		$row = $result->fetchAll(PDO::FETCH_ASSOC);
    	    	    				
    	foreach ($row as $key => $value) {
					
			$mensaje .= get_estancia($value['IdEstancia']);	
			
		}    	
    	  
        return $mensaje;
        	  	
    }
    
    
    		
?>	