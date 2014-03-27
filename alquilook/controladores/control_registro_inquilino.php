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
        
        $nombre_inquilino = $_POST["nombre_inquilino"];	$apellidos_inquilino = $_POST['apellidos_inquilino'];
        $dni_inquilino = $_POST["dni_inquilino"]; $email_inquilino = $_POST["email_inquilino"]; 
        $telefono_inquilino = $_POST["telefono_inquilino"]; 
		
		$arrayUsuarioContraseña = get_usuarioYcontraseña_inquilino($nombre_inquilino, $apellidos_inquilino);
		$IdInmueble = $_SESSION["IdInmueble"];
		
		$bd = new core();

        try{
                                         
            /*insertamos los datos de la nueva estancia*/
            
            $query = "insert into usuarios (IdUsuario, Usuario, Password, Email, Nombre, Apellidos, DNI,
                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
                    values ('', '$arrayUsuarioContraseña[0]', '$arrayUsuarioContraseña[1]', '$email_inquilino', '$nombre_inquilino',
                           '$apellidos_inquilino', '$dni_inquilino', '$telefono_inquilino', 'sin datos', '0', 'sin datos', 'sin datos', '0', '1')";
                            
			$idInquilino = get_lastId($query);
            
			$query2 = "insert into inquilino (IdInquilino,IdUsuario) values ('','$idInquilino');";
            $query3 = "update inmueble set IdInquilino = '$idInquilino' where IdInmueble = '$IdInmueble';";
			
			$bd->query($query2.$query3);
			
            array_push($_SESSION['ArrayIdInquilino'],$idInquilino);
			
			unset($_POST);
			            			
            header("Location: ../vistas/inquilino/registro_inquilino.php");    
                
            

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
    
    
                   
    






?>