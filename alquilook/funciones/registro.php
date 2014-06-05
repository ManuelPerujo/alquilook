<?php

	function valida_email($codigo, $usuario){
		
		$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario from usuarios where Usuario = '$usuario' and CodigoActivacion = '$codigo' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_usuario = $row['IdUsuario'];
				$query2 = "update usuarios set UsuarioActivo = '1' where IdUsuario = '$id_usuario' ";
                $bd->query($query2);
				
				$_SESSION["IdUsuario_sesion"] = $id_usuario;
				
				return true;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}

	function valida_propietario($usuario,$codigo){
				
			$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario,Tipo from usuarios where Usuario = '$usuario' and CodigoActivacion = '$codigo' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_usuario = $row['IdUsuario'];
				$query2 = "insert into propietario (IdPropietario, IdUsuario) values ('', $id_usuario)";
                $bd->query($query2);
				

				$_SESSION['tipo'] = $row['Tipo'];

				return true;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}

	function valida_direccion($arrayDireccion){
		
		$cadena = implode(" ",$arrayDireccion);
		
		$cadena = strtolower($cadena);
		
		return $cadena;
	}

	function get_IdInmueble($direccion, $tipoInmueble){
		
		$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            $query = "select IdInmueble from inmueble where Direccion = '$direccion' and TipoInmueble = '$tipoInmueble'";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_inmueble = $row['IdInmueble'];
								
				return $id_inmueble;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}

	function get_IdMobiliario($nombre){
				
		$bd = new core();
				
		try{
            
            $bd->ConectaBD();
     
            $query = "select IdMobiliario from mobiliario where Tipo = '$nombre' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                
				return null;
                
            }else{
            
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_item = $row['IdMobiliario'];
								
				return $id_item;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }	
		
	}

	function get_mobiliario($IdMobiliario){
		
		$bd = new core();
				
		try{
            
            $bd->ConectaBD();
     
            $query = "select Tipo from mobiliario where IdMobiliario = '$IdMobiliario' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                
				return null;
                
            }else{
            
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$item = $row['Tipo'];
								
				return $item;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}

	function get_tipoEstancia($idEstancia){
		
		$bd = new core();
		
		$query = "select Tipo from estancia where IdEstancia = '$idEstancia'";
		$result = $bd->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['Tipo'];
	}

	function crea_articulo($IdInmueble, $IdEstancia, $arrayArticulos){
		
		$query = "insert into articulo (IdArticulo, IdEstancia, IdInmueble, IdMobiliario, Cantidad) values ";
		$count1 = 0;
		$count2 = 0;
		
		foreach ($arrayArticulos as $key1 => $value1) {
			if($value1 != 0){
				$count1++;
			}
		}
		
		if($count1 != 0){
			
			foreach ($arrayArticulos as $key => $value) {
				
				if($value != 0){
						
					$count2++;
	                if($count2 < $count1){
	                            
	                	$idItem = get_IdMobiliario($key);
						$cantidad = $value;
						
						$query .= "('', '$IdEstancia','$IdInmueble', '$idItem','$cantidad'), ";	            
	                        
	                }if($count2 == $count1){
	                        
	                    $idItem = get_IdMobiliario($key);
	                    $cantidad = $value;
					
						$query .= "('', '$IdEstancia','$IdInmueble', '$idItem','$cantidad') ";
	                        
	                }	
					
				}
						
			}
			
		}else{
			
			$query = null;
			return $query;
			
		}
		
		return $query;
	}

	function get_estancia($IdEstancia){
		
		$elementos = null;
		$estancia = get_tipoEstancia($IdEstancia);
				
		$bd = new core();
		
		$query2 = "select Observacion from observaciones_estancia where IdEstancia = '$IdEstancia'";
		
		$result2 = $bd->query($query2);
		$row2 = $result2->fetch(PDO::FETCH_ASSOC);
		
		$observaciones = $row2['Observacion'];
		
		$query = "select IdMobiliario,Cantidad from articulo where IdEstancia = '$IdEstancia'";
			
		$result = $bd->query($query); 
		
		if($result->rowCount() != 0 || $result2->rowCount() != 0){
		
			$row = $result->fetchAll(PDO::FETCH_ASSOC);
				
			foreach ($row as $key => $value) {
			
				$mobiliario = get_mobiliario($value['IdMobiliario']);
	                                                
	            $elementos .= "<p>".$mobiliario." = ".$value['Cantidad']."</p>";
				
			}
							
			$mensaje = "	<div class='row'>
	
			                		<div class='col-sm-6'>
					                	<div class='alert alert-success alert-dismissable'>
										  	<a class='close' type='button' href='../../controladores/control_borrar_estancia.php?id=".$IdEstancia."'>&times;</a>
										    <h5 class='panel-title magenta'> <i class='fa fa-info'></i> ".$estancia."</h5>
										  <p class='ficha'>".
										  $elementos."
									  	  </p>
									  <p class='ficha'><b> Observaciones: </b>".$observaciones."</p>
									</div>
								</div>			                	
			                </div>";
			
			return $mensaje;
			
		}		
	}

	function get_inquilino($idUsuario, $idInmueble){
		
		$elementos = null;
						
		$bd = new core();
						
		$query = "select Nombre,Apellidos,DNI,Email,Telefono from usuarios where IdUsuario = '$idUsuario'";
			
		$result = $bd->query($query); 
		
		if($result->rowCount() != 0){
		
			$row = $result->fetch(PDO::FETCH_ASSOC);
				
			foreach ($row as $key => $value) {
				                                                
	            $elementos .= "<p><b>".$key."</b> : ".$value."</p>";
				
			}
							
			$mensaje = "	<div class='row'>
	
			                		<div class='col-sm-6'>
					                	<div class='alert alert-success alert-dismissable'>
										  	<a class='close' type='button' href='../../controladores/control_borrar_estancia.php?id=".$idUsuario."&idInmueble=".$idInmueble."'>&times;</a>
										    <h5 class='panel-title magenta'> <i class='fa fa-info'></i>Datos de Usuario</h5>
										  <p class='ficha'>".
										  $elementos."
									  	  </p>
									</div>
								</div>			                	
			                </div>";
			
			return $mensaje;
			
		}
		
	}

	function get_usuarioYcontraseña_inquilino($nombre,$apellidos){
		
		$datos = array();
		
		$usuario = null;
		
		$usuario .= substr($nombre,0,3);
		$usuario .= substr($apellidos, 0,3);
		
		$longitud = 8;
		$contraseña = substr( md5(microtime()), 1, $longitud);
		
		array_push($datos,$usuario,$contraseña);
		
		return $datos;
	}	

	function get_lastId($query){
			
		$bd = new core();	
				
		$query2 = 'SELECT LAST_INSERT_ID()';	
			
		$bd->queryNoDesconecta($query);
        $result = $bd->queryDesconecta($query2);
        $row = $result->fetch(PDO::FETCH_ASSOC);

		return $row['LAST_INSERT_ID()'];	
			
	}

	function get_inmuebleTieneInquilino($idInmueble){
			
		$bd = new core();
		
		$query = "select ArrayIdInquilino from inmueble where IdInmueble = '$idInmueble'";
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		if($result->rowCount() != 0 && $row['ArrayIdInquilino'] != 'null'){
					
			return true;	
			
		}else{
				
			return false;	
			
		}	
		
	}
	

?>