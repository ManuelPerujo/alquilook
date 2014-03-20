<?php
session_start();

if(!$_POST){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
include_once("../funciones/registro.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
        $tipoInmueble = $_POST["tipoInmueble"];
		$direccionInmueble = array(1=>$_POST['via_inmueble'], 2=>$_POST['nombre_inmueble'], 3=>$_POST['num_inmueble'], 4=>$_POST['piso_inmueble']);
        $cp = $_POST["cp_inmueble"]; $poblacionInmueble = $_POST["municipio_inmueble"]; 
        $provinciaInmueble = $_POST["provincia_inmueble"]; $numHabitaciones = $_POST["numero_habitaciones"];
        $numServicios = $_POST["numero_aseos"];  $metrosInmueble = $_POST["metros_inmueble"]; 
		
		$direccion = valida_direccion($direccionInmueble);
        $id_usuario = $_SESSION["IdUsuario_sesion"];
				
        $error = true;
				
        $bd = new core();

        try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el inmueble en la bd */
            $query = "select * from inmueble where Direccion = '$direccion' ";

            $result = $bd->conexion->query($query);
      
            if($result->rowCount()>0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $query = "insert into inmueble (IdInmueble, IdPropietario, IdInquilino, TipoInmueble, Direccion, CP,
                								Municipo,Provincia,NumHabitaciones,NumServicios,Metros)
                    values ('', '$id_usuario', '', '$tipoInmueble', '$direccion', '$cp', '$poblacionInmueble',
                            '$provinciaInmueble', '$numHabitaciones', '$numServicios', '$metrosInmueble')"; 
                
								            
                if($bd->conexion->exec($query)){
                	
                	$_SESSION['erroRegistro'] = FALSE;
                	
					unset($_POST);
    				echo $direccion;
    				//header("Location: ../vistas/inmueble/registro_habitacion.php");
    				
    				$_SESSION['identifica_inmueble'] = $direccion;	
                }
                
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
    
    
                   
    






?>