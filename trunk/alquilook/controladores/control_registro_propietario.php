<?php
session_start();

if(!$_POST || count($_POST) == 0){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
        $usuario = $_POST["usuario_propietario"];  $pass = $_POST["pass_propietario"];  $email = $_POST["email_propietario"];
        $nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"]; $dni = $_POST["dni_propietario"];
        $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"];  $cp = $_POST["cp_propietario"];
        $provincia = $_POST["provincia_propietario"];  $poblacion = $_POST["poblacion_propietario"]; 
        
        $error = true;
		
        $codigoActivacion = rand(0, 9999);
		$mensaje = "Para terminar el registro de su perfil pulse el siguiente link:\r\n"; 
	    $mensaje .= 'http://127.0.0.1/alquilook/vistas/propietario/verificacion_propietario.php?var1='.$codigoActivacion.'&var2='.$usuario; 
	                
	    $headers = "MIME-Version: 1.0\r\n";
	    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
	    $headers .= "From: canario@alquilook.com\r\n";
		
        $bd = new core();

        try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario from usuarios where DNI = '$dni' ";

            $result = $bd->conexion->query($query);
      
            if($result->rowCount()>0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $query = "insert into usuarios (IdUsuario, Admin, Tipo, Usuario, Password, Email, Nombre, Apellidos, DNI,
                                                Telefono, Domicilio, CP, Poblacion, Provincia, CodigoActivacion, UsuarioActivo)
                    values ('', '0', 'Propietario', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$dni',
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