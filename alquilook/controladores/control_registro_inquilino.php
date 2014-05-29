<?php
session_start();
include_once("../funciones/core.php");
include_once("../funciones/registro.php");
include_once '../funciones/usuarios.php';
include_once('../validacion/validacion_servidor.php');

	
				
	if(get_inmuebleTieneInquilino($_SESSION["IdInmueble"]) && $_GET['inq'] == 'FALSE'){
		
		header("Location: control_fin_registro.php");
		
	}if((!$_POST || $_GET['inq'] == 'FALSE') || ($_GET['inq'] == 'TRUE' && !$_POST)){
	
		    $_SESSION['errorInquilino'] = TRUE;
			echo get_inmuebleTieneInquilino($_SESSION["IdInmueble"]);
			echo $_GET['inq'];
			unset($_GET);	
			// header("Location: ../vistas/inquilino/registro_inquilino.php");
			
	}if($_GET['inq'] == 'TRUE' && $_POST){
		
			extract($_POST);
	        
	        $nombre_inquilino = $_POST["nombre_inquilino"];	$apellidos_inquilino = $_POST['apellidos_inquilino'];
	        $dni_inquilino = $_POST["dni_inquilino"]; $email_inquilino = $_POST["email_inquilino"]; 
	        $telefono_inquilino = $_POST["telefono_inquilino"]; 
			
			$arrayUsuarioContraseña = get_usuarioYcontraseña_inquilino($nombre_inquilino, $apellidos_inquilino);
			$IdInmueble = $_SESSION["IdInmueble"];
			
			$arrayValidacion = array();
		
			$arrayValidacion['nombre'] = $nombre_inquilino; $arrayValidacion['apellidos'] = $apellidos_inquilino;
			$arrayValidacion['dni'] = $dni_inquilino; $arrayValidacion['email'] = $email_inquilino;
			$arrayValidacion['telefono'] = $telefono_inquilino; 
							
			if(!valida_datos_personales($arrayValidacion)){
				
				header("Location: ".$_SERVER['HTTP_REFERER']);
				
			}else{
						
				$bd = new core();
	
		        try{
		                                         
		            /*insertamos los datos de la nueva estancia*/
		            
		            $query = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
		                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
		                    values ('', '0', 'Inquilino', '$arrayUsuarioContraseña[0]', '$arrayUsuarioContraseña[1]', '$email_inquilino', '$nombre_inquilino',
		                           '$apellidos_inquilino', '$dni_inquilino', '$telefono_inquilino', 'sin datos', '0', 'sin datos', 'sin datos', '0', '1')";
		                            
					$idUsuario = get_lastId($query);
		            $_SESSION['ArrayIdUsuario'] [] = $idUsuario;
					
					$query2 = "insert into inquilino (IdInquilino,IdUsuario,IdInmueble) values ('','$idUsuario', '$IdInmueble');";
					
					$idInquilino = get_lastId($query2);
				    $_SESSION['ArrayIdInquilino'].= $idInquilino."-";
					
					$inquilinos = $_SESSION['ArrayIdInquilino'];
					
															
					$query3 = "update inmueble set ArrayIdInquilino = '$inquilinos' where IdInmueble = '$IdInmueble';";
					
					$bd->query($query3);
					
		            
					
					unset($_POST);
					
					header("Location: ../vistas/inquilino/registro_inquilino.php");	
				
				}catch(PDOException $except) {
		            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
		        }		
				
			}
			
	}	
    	
        			
                
                
            

        
    
    
                   
    






?>