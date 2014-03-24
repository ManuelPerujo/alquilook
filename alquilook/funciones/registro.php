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
            $query = "select IdUsuario from usuarios where Usuario = '$usuario' and CodigoActivacion = '$codigo' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_usuario = $row['IdUsuario'];
				$query2 = "insert into propietario (IdPropietario, IdUsuario) values ('', $id_usuario)";
                $bd->query($query2);
				
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

	function get_IdInmueble($direccion){
		
		$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            $query = "select IdInmueble from inmueble where Direccion = '$direccion' ";

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
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_mobiliario = $row['IdMobiliario'];
								
				return $id_mobiliario;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }	
		
	}
	
	function crea_estancia($IdInmueble ,$arrayEstancia, $tipoEstancia){
		
		$query = "insert into estancia (IdEstancia, IdInmueble, IdMobiliario, Tipo, Cantidad) values ";
		$count1 = 0;
		$count2 = 0;
		
		foreach ($arrayEstancia as $key1 => $value1) {
			if($value1 != 0){
				$count1++;
			}
		}
		
		if($count1 != 0){
			
			foreach ($arrayEstancia as $key => $value) {
				
				if($value != 0){
						
					$count2++;
	                if($count2 < $count1){
	                            
	                	$idMobiliario = get_IdMobiliario($key);
						$cantidad = $value;
						
						$query .= "('', '$IdInmueble','$idMobiliario', '$tipoEstancia','$cantidad'), ";	            
	                        
	                }if($count2 == $count1){
	                        
	                    $idMobiliario = get_IdMobiliario($key);
						$cantidad = $value;
					
						$query .= "('', '$IdInmueble','$idMobiliario', '$tipoEstancia','$cantidad') ";
	                        
	                }	
					
				}
						
			}
			
		}else{
			
			$query = null;
			return $query;
			
		}
		
		return $query;
	}




?>