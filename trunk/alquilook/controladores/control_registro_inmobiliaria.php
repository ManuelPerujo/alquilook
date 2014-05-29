<?php

		session_start();
		
		if(!$_POST){
		
		    echo "no pasa POST";
		    exit();
		}
		
		include_once("../funciones/core.php");
		include_once("../funciones/registro.php");
		include_once('../funciones/usuarios.php');
		include_once('../validacion/validacion_servidor.php');


        
        extract($_POST);
        
		$usuario = $_POST["usuario_inmobiliaria"]; $pass = $_POST['pass_inmobiliaria']; 
		$email = $_POST['email_inmobiliaria']; $empresa = $_POST["empresa"];
		$cif = $_POST['dni_inmobiliaria'];	$nombre = $_POST["nombre_contacto"]; $apellidos = $_POST["apellidos_contacto"]; 
        $telefono = $_POST["telefono_contacto"]; $domicilio = $_POST["domicilio_inmobiliaria"];
        $cp = $_POST["cp_inmobiliaria"];  $poblacion = $_POST["poblacion_inmobiliaria"]; 
		$provincia = $_POST["provincia_inmobiliaria"]; $iban = $_POST["iban"];
						
		$arrayValidacion = array();
		
		$arrayValidacion['usuario'] = $usuario; $arrayValidacion['pass'] = $pass; 
		$arrayValidacion['email'] = $email; $arrayValidacion['nombre'] = $nombre;
		$arrayValidacion['dni'] = $cif;
		$arrayValidacion['apellidos'] = $apellidos; $arrayValidacion['telefono'] = $telefono;
		$arrayValidacion['domicilio'] = $domicilio; $arrayValidacion['cp'] = $cp;
		$arrayValidacion['poblacion'] = $poblacion; $arrayValidacion['provincia'] = $provincia;
				
		if(!valida_datos_personales($arrayValidacion) || !valida_datos_usuario($arrayValidacion)){
			
			header("Location: ".$_SERVER['HTTP_REFERER']);
			
		}else{
			
	        $bd = new core();
	
	        try{
	            
	            $bd->ConectaBD();
	     
	            /*comprobamos que no existe el inmueble en la bd */
	            $query = "select * from usuarios where DNI = '$cif' and Tipo = 'Inmobiliaria' ";
	
	            $result = $bd->conexion->query($query);
	      
	            if($result->rowCount()>0) {
	            			
	            	$_SESSION['error_registro'] = TRUE;	
	            	
	                header("Location: ".$_SERVER['HTTP_REFERER']);
	                
	            }else{
	            	
					$mensaje = "Ha sido dado de alta en Alquilook, sus datos de ingreso son los siguientes:\r\n"; 
	
				    $mensaje .= "<br><br>
					   			 Nombre de Usuario: <b>$usuario</b> \r\n<br>
					    		 Contraseña: <b>$pass</b> \r\n<br>";
								 
					$mensaje .= "<br><br>Para acceder a alquilook pulse el siguiente enlace<br><br>
								<a href='http://www.alquilook.com'><b>www.alquilook.com</b></a>";			 
					            
				    $headers = "MIME-Version: 1.0\r\n";
				    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
				    $headers .= "From: info@alquilook.com\r\n";
					
					mail($email, 'Alquilook: Confirmación registro de Inmobiliaria', $mensaje, $headers);
					
	            	/*insertamos los datos del nuevo usuario*/
	                $query2 = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
		                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
		                    values ('', '0', 'Inmobiliaria', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$cif',
		                            '$telefono', '$domicilio', '$cp', '$poblacion', '$provincia', 'null', '1')"; 
	                
					$idUsuario = get_lastId($query2);
					
					$query3 = "insert into inmobiliaria (IdInmobiliaria, IdUsuario, IBAN, NombreEmpresa)
							   values ('','$idUsuario','$iban','$empresa')";
							   
					$bd->query($query3);		   
	                
					$_SESSION['error_registro'] = FALSE;
					
	            }
	
	        }catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	        }
			
		}
				 
        
    	header("Location:  ".$_SERVER['HTTP_REFERER']);
    
                   
    






?>