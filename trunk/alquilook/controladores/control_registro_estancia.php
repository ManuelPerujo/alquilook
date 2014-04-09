<?php
session_start();
include_once("../funciones/core.php");
include_once("../funciones/registro.php");
include_once("../funciones/usuarios.php");
//include ("funciones/validacion_datos.php");


if($_GET['estancia'] == 'TRUE'){
			
			if(substr(basename($_SERVER['HTTP_REFERER']), 0,25) == 'editar_estancia_admin.php'){
				
				$IdInmueble = $_GET['idInmueble'];
				
			}else{
				
				$_SESSION["IdInmueble"] = get_IdInmueble($_SESSION['identifica_inmueble_direccion'], $_SESSION['identifica_inmueble_tipo']);	
		    	$IdInmueble = $_SESSION["IdInmueble"];	
				
			}						
			
			
			    
	        extract($_POST);
	        
	        $tipoEstancia = $_POST["tipoEstancia"];
			
			// mobiliario
			 
	        $sofa = $_POST["sofa"];	$mesa = $_POST["mesa"]; $silla = $_POST["silla"]; 
	        $cuadro = $_POST["cuadro"]; $camaInd = $_POST["camaIndividual"]; $camaDoble = $_POST["camaDoble"];
	        $mesitaNoche = $_POST["mesitaNoche"]; $comoda = $_POST["comoda"]; $accesorioAseo = $_POST["accesoriosAseo"];
	        $muebleAseo = $_POST["muebleAseo"]; $espejo = $_POST["espejo"]; $hidromasaje = $_POST["hidromasaje"];
			
			//electrodomesticos
			
			$television = $_POST["television"];	$dvd = $_POST["dvd"]; $equipoMusica = $_POST["equipoMusica"];
			$frigorifico = $_POST["frigorifico"]; $vitroceramica = $_POST["vitroceramica"]; $horno = $_POST["horno"];
	        $microondas = $_POST["microondas"]; $lavadora = $_POST["lavadora"]; $secadora = $_POST["secadora"];
	        $lavavajillas = $_POST["lavavajillas"]; $aspiradora = $_POST["aspiradora"]; $termo = $_POST["termo"];
				        			
			$arrayArticulos = array('Sofa'=>$sofa, 'Mesa'=>$mesa, 'Silla'=>$silla, 'Cuadro'=>$cuadro, 'Cama Individual'=>$camaInd, 'Cama Doble'=>$camaDoble,
								   'Mesita Noche'=>$mesitaNoche, 'Comoda'=>$comoda, 'Accesorio Servicio'=>$accesorioAseo, 'Mueble Aseo'=>$muebleAseo,
								   'Espejo'=>$espejo, 'Hidromasaje'=>$hidromasaje, 'Television'=>$television, 'Dvd'=>$dvd, 'Equipo Sonido'=>$equipoMusica,
								   'Frigorifico'=>$frigorifico, 'Vitroceramica'=>$vitroceramica, 'Horno'=>$horno, 'Microondas'=>$microondas,
								   'Lavadora'=>$lavadora, 'Secadora'=>$secadora, 'Lavavajillas'=>$lavavajillas, 'Aspiradora'=>$aspiradora, 'Termo'=>$termo);
			
			$observaciones = $_POST['observacion'];
							
	        $bd = new core();
	
	        try{
	            
	            $bd->ConectaBD();
	                 
	            /*insertamos los datos de la nueva estancia*/
	            
	            $_SESSION['errorEstancia'] = TRUE;
	            
				$arrayVacio = null;
					
				foreach ($arrayArticulos as $key => $value) {
					
					if($value != 0){
						
						$arrayVacio = FALSE;
						break;
						
					}else{
						$arrayVacio = TRUE;
					}
					
				}
	            				
																			
				if($arrayVacio != TRUE && !empty($observaciones)){
								
					$query1 = "insert into estancia (IdEstancia, IdInmueble, Tipo) values ('','$IdInmueble','$tipoEstancia') ";
					$IdEstancia = get_lastId($query1);
						
					$_SESSION['ArrayIdEstancia'][] = $IdEstancia;
						
					$query3 = crea_articulo($IdInmueble, $IdEstancia, $arrayArticulos);
						
					$bd->query($query3);
						
					$query4 = "insert into observaciones_estancia (IdObservaciones, IdInmueble, IdEstancia, Observacion)
							  values ('','$IdInmueble','$IdEstancia','$observacion')";
				
					$bd->query($query4);
						
					unset($_SESSION['errorEstancia']);
							
				}if($arrayVacio != TRUE && empty($observaciones)){
								
					$query1 = "insert into estancia (IdEstancia, IdInmueble, Tipo) values ('','$IdInmueble','$tipoEstancia') ";
					$IdEstancia = get_lastId($query1);
						
					$_SESSION['ArrayIdEstancia'][] = $IdEstancia;
						
					$query3 = crea_articulo($IdInmueble, $IdEstancia, $arrayArticulos);
					
					$bd->query($query3);
					
					echo $query1;
						
					unset($_SESSION['errorEstancia']);
							
				}if($arrayVacio == TRUE && !empty($observaciones)){
								
					$query1 = "insert into estancia (IdEstancia, IdInmueble, Tipo) values ('','$IdInmueble','$tipoEstancia') ";
					$IdEstancia = get_lastId($query1);
						
					$_SESSION['ArrayIdEstancia'][] = $IdEstancia;
						
					$query4 = "insert into observaciones_estancia (IdObservaciones, IdInmueble, IdEstancia, Observacion)
							  values ('','$IdInmueble','$IdEstancia','$observacion')";
				
					$bd->query($query4);
						
					unset($_SESSION['errorEstancia']);
							
				}
					
				
	            unset($_POST);
				
				if(substr(basename($_SERVER['HTTP_REFERER']), 0,25) == 'editar_estancia_admin.php'){
						
					header("Location: ".$_SERVER['HTTP_REFERER']);	
					
				}else{
					
					header("Location: ../vistas/inmueble/registro_estancia.php");
					
				}
				
				    
	            
	
	        }catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	        }	
	

	

}
if($_GET['estancia'] == 'FALSE'){
		
		$_SESSION["IdInmueble"] = get_IdInmueble($_SESSION['identifica_inmueble_direccion'], $_SESSION['identifica_inmueble_tipo']);
		header("Location: ../vistas/inquilino/registro_inquilino.php");
			
}
    
                   
    






?>