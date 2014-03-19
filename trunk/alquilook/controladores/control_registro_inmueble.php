<?php
session_start();

if(!$_POST){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
        $tipoInmueble = $_POST["TipoInmueble"];  $direccionInmueble = $_POST["Direccion"];
        $cp = $_POST["CP"]; $poblacionInmueble = $_POST["Municipio"]; 
        $provinciaInmueble = $_POST["Provincia"]; $numHabitaciones = $_POST["NumHabitaciones"];
        $NumServicios = $_POST["NumServicios"];  $metrosInmueble = $_POST["Metros"]; 
        
        $error = true;
				
        $bd = new core();

        try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el inmueble en la bd */
            $query = "select IdUsuario from usuarios where DNI = '$dni' ";

            $result = $bd->conexion->query($query);
      
            if($result->rowCount()>0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $query = "insert into usuarios (IdUsuario, Usuario, Password, Email, Nombre, Apellidos, DNI,
                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
                    values ('', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$dni',
                            '$telefono', '$domicilio', '$cp', '$poblacion', '$provincia', $codigoActivacion, '0')"; 
                
								            
                if($bd->conexion->exec($query)){
                	$_SESSION['erroRegistro'] = FALSE;
                	$_SESSION['bienvenida'] = true;
					
					mail($email, 'Mensaje confirmacion perfil usuario', $mensaje, $headers);	
                }
                
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
    
    
                   
    unset($_POST);
    
    header("Location: ../vistas/propietario/verificacion_propietario.php");






?>