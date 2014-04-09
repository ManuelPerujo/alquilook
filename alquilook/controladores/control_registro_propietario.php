<?php
session_start();

if(!$_POST || count($_POST) == 0){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
		$aceptaCondiciones = $_POST['aceptaCondiciones'];
		
        $usuario = $_POST["usuario_propietario"];  $pass = $_POST["pass_propietario"];  $email = $_POST["email_propietario"];
        $nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"]; $dni = $_POST["dni_propietario"];
        $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"];  $cp = $_POST["cp_propietario"];
        $provincia = $_POST["provincia_propietario"];  $poblacion = $_POST["poblacion_propietario"]; 
        
        $error = true;
		
        $codigoActivacion = rand(0, 9999);
		
		
		$host = "mail.alquilook.com";  // The name of your mail server. (Commonly mail.yourdomain.com if your mail is hosted with HostMySite)
		$username = "info@alquilook.com";  // A valid email address you have setup 
		$from_address = "info@alquilook.com";  // If your mail is hosted with HostMySite this has to match the email address above 
		$password = "Alquilook2014";  // Password for the above email address
		$reply_to = "info@alquilook.com";  //Enter the email you want customers to reply to
				
		$mensaje = "Para terminar el registro de su perfil pulse el siguiente link:\r\n"; 
	    $mensaje .= 'http://127.0.0.1/alquilook/vistas/propietario/verificacion_propietario.php?var1='.$codigoActivacion.'&var2='.$usuario.'&bienvenida=1'; 
	    		
		$auth = array('host' => $host, 'auth' => true, 'username' => $username, 'password' => $password);
		$headers = array('From' => $from_address, 'To' => $email, 'Subject' => 'Alquilook: Confirmación registro de usuario', 'Reply-To' => $reply_to);

		$bd = new core();

		if($aceptaCondiciones == 'ok'){
			
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
						
						// This section send the email
						$smtp = Mail::factory('smtp', $auth);
						$mail = $smtp->send($email, $headers, $email_message);	
	                }
	                
	            }
	
	        }catch(PDOException $except) {
	            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
	        }	
			
			unset($_POST);
    
    		header("Location: ../vistas/propietario/verificacion_propietario.php");
			
		}

        if($aceptaCondiciones != 'ok'){
        		
        			
        	header("Location: ../vistas/propietario/registro_propietario.php");	
        	
        }
    
    
                   
    






?>