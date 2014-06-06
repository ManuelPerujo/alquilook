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
		include_once('../funciones/admin.php');

		$luz = 0; $gas = 0; $agua = 0;
        
        extract($_POST);
		
		if(isset($_POST['luz'])){
			
			$luz = $_POST['luz'];
			
		}if(isset($_POST['agua'])){
			
			$luz = $_POST['agua'];
			
		}if(isset($_POST['gas'])){
			
			$luz = $_POST['gas'];
			
		}
        
		$mensualidad = $_POST["mensualidad"]; 
        $tipoInmueble = $_POST["tipoInmueble"]; $tipoContrato = $_POST['tipoContrato'];
		$direccionInmueble = array(1=>$_POST['via_inmueble'], 2=>$_POST['nombre_inmueble'], 3=>$_POST['num_inmueble'], 4=>$_POST['piso_inmueble']);
        $cp = $_POST["cp_inmueble"]; $poblacionInmueble = $_POST["municipio_inmueble"]; 
        $provinciaInmueble = $_POST["provincia_inmueble"]; $numHabitaciones = $_POST["numero_habitaciones"];
        $numServicios = $_POST["numero_aseos"];  $metrosInmueble = $_POST["metros_inmueble"]; 
		
		$direccion = valida_direccion($direccionInmueble);
        
		
				
		$arrayValidacion = array();
		
		$arrayValidacion['mensualidad'] = $mensualidad; $arrayValidacion['nombre_inmueble'] = $_POST['nombre_inmueble']; 
		$arrayValidacion['num_inmueble'] = $_POST['num_inmueble']; $arrayValidacion['piso_inmueble'] = $_POST['piso_inmueble'];
		$arrayValidacion['cp'] = $_POST["cp_inmueble"]; $arrayValidacion['provincia_inmueble'] = $provinciaInmueble;
		$arrayValidacion['metros_inmueble'] = $metrosInmueble;
		
		
				
		if(!valida_inmueble($arrayValidacion)){
			
			header("Location: ".$_SERVER['HTTP_REFERER']);
			
		}else{
			
			if($_SESSION['tipo'] == 'Inmobiliaria'){
			
				$idInmobiliaria = get_idInmobiliaria_from_usuario($_SESSION["IdUsuario_sesion"]);
				
				$id_usuario = $_SESSION["registro_propietario"];
				$idPropietario = get_IdPropietario($id_usuario);
				
			}else{
					
				$idInmobiliaria = '0';	
				
				$id_usuario = $_SESSION["IdUsuario_sesion"];
				$idPropietario = get_IdPropietario($id_usuario);
				
			}
				        
	
	        try{
	            
				$bd = new core();
					            	     
	            /*comprobamos que no existe el inmueble en la bd */
	            $query = "select * from inmueble where Direccion = '$direccion' and TipoInmueble = '$tipoInmueble' ";
	
	            $result = $bd->query($query);
	      
	            if($result->rowCount()>0) {
	            	
	                header("Location: ../vistas/inmueble/registro_inmueble.php");
	                
	            }else{
	            	
	          		/*insertamos los datos del nuevo usuario*/
	                $query2 = "insert into inmueble (IdInmueble, IdPropietario, IdInmobiliaria, ArrayIdInquilino, TipoInmueble, TipoContrato, Direccion, CP,
	                								Municipio,Provincia,NumHabitaciones,NumServicios,Metros,Valor,Agua,Luz,Gas)
	                    values ('', '$idPropietario', '$idInmobiliaria', 'null', '$tipoInmueble', '$tipoContrato', '$direccion', '$cp', '$poblacionInmueble',
	                            '$provinciaInmueble', '$numHabitaciones', '$numServicios', '$metrosInmueble','$mensualidad','$agua',
	                            '$luz','$gas')"; 
	                
									            
	                	$IdInmueble = get_lastId($query2);
	                	
						$_SESSION['IdInmueble'] = $IdInmueble;
	                	$_SESSION['erroRegistro'] = FALSE;
						$_SESSION['identifica_inmueble_direccion'] = $direccion;
						$_SESSION['identifica_inmueble_tipo'] = $tipoInmueble;
						$_SESSION['ArrayIdEstancia'] = array();
						$_SESSION['ArrayIdInquilino'] = null;
						$_SESSION['ArrayIdUsuario'] = array();
	                	$_SESSION['registro_terminado'] = FALSE;
											
						unset($_POST);
	    				
	    				if($_SESSION['tipo'] == 'Inmobiliaria'){
						echo $_SESSION['tipo'];						
						//	header("Location: ../vistas/inmueble/registro_estancia_inmo.php");
							
						}else{
								
						//	header("Location: ../vistas/inmueble/registro_estancia.php");	
							
						}
	    				
	                
	            }
	
	        }catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	        }
			
		}
				
        
    
    
                   
    






?>