<?php 

	session_start();
	include_once("../funciones/core.php");
	include_once("../funciones/registro.php");
	include_once '../funciones/usuarios.php';

	extract($_POST);
	        
	        $nombre_inquilino = $_POST["nombre_inquilino"];	$apellidos_inquilino = $_POST['apellidos_inquilino'];
	        $dni_inquilino = $_POST["dni_inquilino"]; $email_inquilino = $_POST["email_inquilino"]; 
	        $telefono_inquilino = $_POST["telefono_inquilino"]; 
			
			$arrayUsuarioContraseña = get_usuarioYcontraseña_inquilino($nombre_inquilino, $apellidos_inquilino);
			$IdInmueble = $_POST["idInmueble"];
			$direccion = $_POST["direccion"];
			
			$bd = new core();
	
	        try{
	                                         
	            /*insertamos los datos de la nueva estancia*/
	            
	            $query = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
	                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
	                    values ('', '0', 'Inquilino', '$arrayUsuarioContraseña[0]', '$arrayUsuarioContraseña[1]', '$email_inquilino', '$nombre_inquilino',
	                           '$apellidos_inquilino', '$dni_inquilino', '$telefono_inquilino', 'sin datos', '0', 'sin datos', 'sin datos', '0', '1')";
	                            
				$idUsuario = get_lastId($query);
	            				
				$query2 = "insert into inquilino (IdInquilino,IdUsuario,IdInmueble) values ('','$idUsuario', '$IdInmueble');";
				
				$idInquilino = get_lastId($query2);
				
				$query4 = "select ArrayIdInquilino from inmueble where IdInmueble = '$IdInmueble'";
				
				$result = $bd->query($query4); $row = $result->fetch(PDO::FETCH_ASSOC);
				
			    $row['ArrayIdInquilino'].= $idInquilino."-";
				
				$inquilinos = $row['ArrayIdInquilino'];
																		
				$query3 = "update inmueble set ArrayIdInquilino = '$inquilinos' where IdInmueble = '$IdInmueble';";
				
				$bd->query($query3);
				
	            $_SESSION['add_inquilino'] = TRUE;
	            				
				unset($_POST);
				
				header("Location: ".$direccion);	
			
			}catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	        }




















?>