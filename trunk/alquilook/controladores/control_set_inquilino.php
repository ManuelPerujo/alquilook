<?php

	session_start();
	
	if(!$_POST || count($_POST) == 0){
	
	    echo "no pasa POST";
	    exit();
	}

	include_once("../funciones/core.php");



        
        extract($_POST);
        
		$idUsuario = $_POST['idUsuario'];
		$direccion = $_POST['direccion'];
		
        $email = $_POST["email_propietario"];$nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"];
		$dni = $_POST["dni_propietario"]; $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"];
		$cp = $_POST["cp_propietario"]; $provincia = $_POST["provincia_propietario"]; $poblacion = $_POST["poblacion_propietario"]; 
        
        $error = true;
		        		
        $bd = new core();

					
		try{
            
	    	$bd->ConectaBD();
	     
	            /*comprobamos que no existe el usuario en la bd */
	        
	            /*insertamos los datos del nuevo usuario*/
	        $query = "update usuarios set Email='$email', Nombre='$nombre', Apellidos='$apellidos', DNI='$dni',
	           		Telefono='$telefono', Domicilio='$domicilio', CP='$cp', Poblacion='$poblacion', Provincia='$provincia'
	           		where IdUsuario='$idUsuario'"; 
	                
			$bd->query($query);
	
	    }catch(PDOException $except) {
	    	
	    	echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
			
	    }	
			
		unset($_POST);
    
    	header("Location: ".$direccion);
			
		
    
    
                   
    






?>