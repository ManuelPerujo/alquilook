<?php
session_start();

if(!$_POST || count($_POST) == 0){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
include_once('../validacion/validacion_servidor.php');


        
        extract($_POST);
        
				
        $usuario = $_POST["usuario_propietario"];  $pass = $_POST["pass_propietario"];  $email = $_POST["email_propietario"];
        $nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"]; $dni = $_POST["dni_propietario"];
        $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"];  $cp = $_POST["cp_propietario"];
        $provincia = $_POST["provincia_propietario"];  $poblacion = $_POST["poblacion_propietario"]; $aceptaCondiciones = $_POST['aceptaCondiciones'];
        
		unset($_POST);
		
		$arrayValidacion = array();
		
		$arrayValidacion['usuario'] = $usuario; $arrayValidacion['pass'] = $pass; $arrayValidacion['email'] = $email; $arrayValidacion['nombre'] = $nombre;
		$arrayValidacion['apellidos'] = $apellidos; $arrayValidacion['dni'] = $dni; $arrayValidacion['telefono'] = $telefono; $arrayValidacion['domicilio'] = $domicilio;
		$arrayValidacion['cp'] = $cp; $arrayValidacion['provincia'] = $provincia; $arrayValidacion['poblacion'] = $poblacion;
						
		if(!valida_datos_personales($arrayValidacion) || !valida_datos_usuario($arrayValidacion)){
			
			header("Location: ../vistas/propietario/registro_propietario.php");
			
		}else{
					
			$codigoActivacion = rand(0, 9999);
						
			$mensaje = "Para terminar el registro de su perfil pulse el siguiente link:\r\n"; 
	
	
		    $mensaje .= 'test.tejares11.com/alquilook/vistas/propietario/verificacion_propietario.php?var1='.$codigoActivacion.'&var2='.$usuario.'&bienvenida=1'; 
		                
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
		      
		            if($result->rowCount()>0) {
		            	
		                $_SESSION['error'] = "El usuario ya existe";
		                
		                header("Location: ../vistas/propietario/registro_propietario.php");
		                
		            }else{
		            /*insertamos los datos del nuevo usuario*/
		                $query2 = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
		                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
		                    values ('', '0', 'Propietario', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$dni',
		                            '$telefono', '$domicilio', '$cp', '$poblacion', '$provincia', $codigoActivacion, '0')"; 
		                
										            
		                if($bd->conexion->exec($query2)){
		                	
		                	$_SESSION['erroRegistro'] = FALSE;
		                	$_SESSION['bienvenida'] = true;
	 						
							mail($email, 'Alquilook: Confirmación registro de usuario', $mensaje, $headers);	
							
							header("Location: ../vistas/propietario/verificacion_propietario.php");
							
		                }
		                
		            }
		
		        }catch(PDOException $except) {
		            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
		        }	
				
			}else{
						
				$_SESSION['error'] = "Debe aceptar las condiciones!";	
	        		
	        	header("Location: ../vistas/propietario/registro_propietario.php");	
				
			}
	
				
		}
		
        		
        
    
    
                   
    






?>