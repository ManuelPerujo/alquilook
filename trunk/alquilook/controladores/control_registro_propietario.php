<?php
		
		session_start();
		
		
		include_once("../funciones/core.php");
		include_once('../validacion/validacion_servidor.php');
		include_once('../funciones/registro.php');


        extract($_POST);
        $tipo = $_POST["tipo"];
        $usuario = $_POST["usuario_propietario"]; $pass = $_POST["pass_propietario"]; $email = $_POST["email_propietario"];
        $nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"]; $dni = $_POST["dni_propietario"];
        $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"]; $cp = $_POST["cp_propietario"];
        $provincia = $_POST["provincia_propietario"]; $poblacion = $_POST["poblacion_propietario"]; $aceptaCondiciones = $_POST['aceptaCondiciones'];
        
		
		
		unset($_POST);
		
		$arrayValidacion = array();
		
		$arrayValidacion['usuario'] = $usuario; $arrayValidacion['pass'] = $pass; $arrayValidacion['email'] = $email; $arrayValidacion['nombre'] = $nombre;
		$arrayValidacion['apellidos'] = $apellidos; $arrayValidacion['dni'] = $dni; $arrayValidacion['telefono'] = $telefono; $arrayValidacion['domicilio'] = $domicilio;
		$arrayValidacion['cp'] = $cp; $arrayValidacion['provincia'] = $provincia; $arrayValidacion['poblacion'] = $poblacion;
						
		if(!valida_datos_personales($arrayValidacion) || !valida_datos_usuario($arrayValidacion)){
			
			if(isset($tipo) && $tipo == 'Inmobiliaria'){
						
				header("Location: ../vistas/propietario/registro_propietario_inmo.php");	
				
			}if($tipo == 'propietario'){
					
				header("Location: ../vistas/propietario/registro_propietario.php");
				
			}
			
			
		}else{
					
			if(isset($tipo) && $tipo == 'inmobiliaria'){
						
				$mensaje = "Los datos de usuario solicitados son\r\n<br><br>
					    		Nombre de Usuario: <b>$usuario</b> \r\n<br>
					    		Contraseña: <b>$pass</b> \r\n<br>";
					    		
				$mensaje .= "<br><br>Para acceder a alquilook pulse el siguiente enlace<br><br>
								<a href='http://www.alquilook.com'><b>www.alquilook.com</b></a>";
								
				$codigoActivacion = '0';
				
				$usuarioActivo = '1';					    		 	
				
			}if($tipo == 'propietario'){
				
				$usuarioActivo = '0';
					
				$codigoActivacion = rand(0, 9999);
						
				$mensaje = "Para terminar el registro de su perfil pulse el siguiente link:\r\n"; 
				
			    $mensaje .= 'www.alquilook.com/vistas/propietario/verificacion_propietario.php?var1='.$codigoActivacion.'&var2='.$usuario.'&bienvenida=1';		
				
			}	
						                
		    $headers = "MIME-Version: 1.0\r\n";
		    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
		    $headers .= "From: info@alquilook.com\r\n";
			
	        $bd = new core();

			if($aceptaCondiciones == 'ok'){
				
				try{
	            
		            $bd->ConectaBD();
		     	
		            /*comprobamos que no existe el usuario en la bd */
		            $query = "select IdUsuario from usuarios where DNI = '$dni' ";
		
		            $result = $bd->conexion->query($query);
					
					$query11 = "select IdUsuario from usuarios where Usuario = '$usuario' ";
		
		            $result11 = $bd->conexion->query($query11);
					
		      
		            if($result->rowCount()>0) {
		            	
		                $_SESSION['error'] = "Usuario con el mismo DNI ya registrado";
		                
						if(isset($tipo) && $tipo == 'inmobiliaria'){
						
							header("Location: ../vistas/propietario/registro_propietario_inmo.php");
							
						}if($tipo == 'propietario'){
						
							header("Location: ../vistas/propietario/registro_propietario.php");
							
						}		
					
		            }if($result11->rowCount()>0) {
		            	
		                $_SESSION['error'] = "Nombre de Usuario ya en uso";
		                
		               if(isset($tipo) && $tipo == 'inmobiliaria'){
						
							header("Location: ../vistas/propietario/registro_propietario_inmo.php");
							
						}if($tipo == 'propietario'){
						
							header("Location: ../vistas/propietario/registro_propietario.php");
							
						}
		            
		            }if($result->rowCount() == 0 && $result11->rowCount() == 0){
		            	
		            	/*insertamos los datos del nuevo usuario*/
		                $query2 = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
		                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
		                    values ('', '0', 'Propietario', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$dni',
		                            '$telefono', '$domicilio', '$cp', '$poblacion', '$provincia', $codigoActivacion, '$usuarioActivo')"; 
		                
		                	
		                	$_SESSION['erroRegistro'] = FALSE;
		                	
	 						
							mail($email, 'Alquilook: Confirmación registro de usuario', $mensaje, $headers);	
							
							if(isset($tipo) && $tipo == "inmobiliaria"){
									
								$idUsuario = get_lastId($query2);
								
								$_SESSION['registro_propietario'] = $idUsuario; 
								
								$query3 = "insert into propietario (IdPropietario, IdUsuario) values ('', '$idUsuario')";
								
								$bd->query($query3);
										
								header("Location: ../vistas/inmueble/registro_inmueble_inmo.php");	
								
							}if($tipo == 'propietario'){
								
								$bd->query($query2);
								
								$_SESSION['bienvenida'] = true;
								
								header("Location: ../vistas/propietario/verificacion_propietario.php");	
								
							}
							
		                
		            }
					
		
		        }catch(PDOException $except){
		            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
		        }	
				
			}else{
						
				$_SESSION['error'] = "Debe aceptar las condiciones!";	
	        		
	        	header("Location: ../vistas/propietario/registro_propietario.php");	
				
			}
	
				
		}
		
        		
?>