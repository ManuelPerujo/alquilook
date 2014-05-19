<?php 
	
	function esVacio($dato){
		
		return $dato == "";
				
	}
	
	function valida_datos_personales($datosPersonales){
		
		$_SESSION['error'] = null;
		
		$exito = TRUE;
		
		foreach ($datosPersonales as $key => $value) {
			
			if(esVacio($value)){
				
				$_SESSION['error'] = "El campo ".$key." est&aacute; vac&iacute;o";
				
				return false;
				
			}
			
		}
				
		if(isset($datosPersonales['nombre'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\-\. ]+$/', $datosPersonales['nombre'])) {
				 
		        $_SESSION['error'] = "El campo Nombre s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['nombre'])>50){
		        	
		            $_SESSION['error'] = "El campo Nombre supera la longitud permitida de 50 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['apellidos'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\-\. ]+$/', $datosPersonales['apellidos'])) {
				 
		        $_SESSION['error'] = "El campo Apellidos s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['apellidos'])>50){
		        	
		            $_SESSION['error'] = "El campo Apellidos supera la longitud permitida de 50 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['dni'])){
			
			if (strlen($datosPersonales['dni']) != 9){ // si la longitud esta mal
			
	            $_SESSION['error'] = "Longitud incorrecta para el DNI";
	            
				return false;
				
	        } else {
	        	
	            //Comprobar si es un DNI '/^[0-9]{8}[A-Z]$/i'
	            if (!preg_match('/^[0-9]{8}[A-Z]$/', $datosPersonales['dni'])){
	            	
	                $_SESSION['error'] = "DNI Incorrecto";
	                
					return false;
					
	            } else { //si es un dni correcto
	                //Comprobar letra
	                
	                $valoresLetra = array(0 => 'T', 1 => 'R', 2 => 'W', 3 => 'A', 4 => 'G', 5 => 'M', 6 => 'Y', 7 => 'F', 8 => 'P', 9 => 'D', 10 => 'X', 11 => 'B',
        								  12 => 'N', 13 => 'J', 14 => 'Z', 15 => 'S', 16 => 'Q', 17 => 'V', 18 => 'H', 19 => 'L', 20 => 'C', 21 => 'K',22 => 'E');
	                
	                if (strtoupper($datosPersonales['dni'][strlen($datosPersonales['dni']) - 1]) != $valoresLetra[((int) substr($datosPersonales['dni'], 0, strlen($datosPersonales['dni']) - 1)) % 23]){
	                	
	                    $_SESSION['error'] = "La letra del DNI no coincide";
	                    
						return false;
						
	                }
					
	            }
				
	        }
							
		}if(isset($datosPersonales['email'])){
			
			if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $datosPersonales['email'])) {
				 
		        $_SESSION['error'] = "El correo electr&oacute;nico parece estar mal escrito. Si es correcto y a&uacute;n as&iacute; no lo acepta ,p&oacute;ngase en contacto con nosotros.";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['email'])>50){
		        	
		            $_SESSION['error'] = "El campo Email supera la longitud permitida de 50 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['telefono'])){
			
			if(!preg_match('/^[0-9]{9,9}$/', $datosPersonales['telefono'])) {
				 
		        $_SESSION['error'] = "El campo Apellidos s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['telefono'])>9){
		        	
		            $_SESSION['error'] = "El campo Tel&eacute;fono supera la longitud permitida de 9 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['domicilio'])){
			
		        if(strlen($datosPersonales['domicilio'])>50){
		        	
		            $_SESSION['error'] = "El campo Direcci&oacute;n supera la longitud permitida de 50 caracteres";
					
		            return false;
					
		        }
			
		}if(isset($datosPersonales['cp'])){
			
			if(!preg_match('/^[0-9]{5,5}$/', $datosPersonales['cp'])) {
				 
		        $_SESSION['error'] = "El c&oacute;digo postal debe ser un n&uacute;mero";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['cp'])>5){
		        	
		            $_SESSION['error'] = "El tama&ntilde;o del c&oacute;digo postal no es correcto";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['provincia'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\- ]+$/', $datosPersonales['provincia'])) {
				 
		        $_SESSION['error'] = "El campo Provincia s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['provincia'])>30){
		        	
		            $_SESSION['error'] = "El campo Provincia supera la longitud permitida de 30 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosPersonales['poblacion'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\-\. ]+$/', $datosPersonales['poblacion'])) {
				 
		        $_SESSION['error'] = "El campo localidad s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosPersonales['poblacion'])>30){
		        	
		            $_SESSION['error'] = "El campo localidad supera la longitud permitida de 30 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}

		return $exito;
		
	}

	function valida_datos_usuario($datosUsuario){
		
		$_SESSION['error'] = null;
		
		$exito = TRUE;
		
		foreach ($datosUsuario as $key => $value) {
			
			if(esVacio($value)){
				
				$_SESSION['error'] = "El campo ".$key." est&aacute; vac&iacute;o";
				
				return false;
				
			}
			
		}
		
		if(isset($datosUsuario['usuario'])){
			
			if(strlen($datosUsuario['usuario'])>30){
		       	
		    	$_SESSION['error'] = "El campo Nombre supera la longitud permitida de 50 caracteres";
					
		        return false;
					
		    }
		        
			
		}if(isset($datosUsuario['pass'])){
			
			if(strlen($datosUsuario['pass'])>30){
		        	
		        $_SESSION['error'] = "El campo Nombre supera la longitud permitida de 50 caracteres";
					
		    	return false;
					
		    }
		        
		    
			
		}if(isset($datosUsuario['email'])){
			
			if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $datosUsuario['email'])) {
				 
		        $_SESSION['error'] = "El correo electr&oacute;nico parece estar mal escrito. Si es correcto y a&uacute;n as&iacute; no lo acepta ,p&oacute;ngase en contacto con nosotros.";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosUsuario['email'])>50){
		        	
		            $_SESSION['error'] = "El campo Email supera la longitud permitida de 50 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}
		
		return $exito;
		
	}

	function valida_inmueble($datosInmueble){
		
		$_SESSION['error'] = null;
		
		$exito = TRUE;
		
		foreach ($datosInmueble as $key => $value) {
			
			if(esVacio($value)){
				
				$_SESSION['error'] = "El campo ".$key." est&aacute; vac&iacute;o";
				
				return false;
				
			}
			
		}
		
		if(isset($datosInmueble['mensualidad'])){
			
			if(!preg_match('/^[0-9]{9,9}$/', $datosInmueble['mensualidad'])) {
				 
		        $_SESSION['error'] = "El alquiler s&oacute;lo puede contener n&uacute;meros.";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['mensualidad'])>10){
		        	
		            $_SESSION['error'] = "El precio del alquiler es demasiado alto";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosInmueble['nombre_inmueble'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\- ]+$/', $datosInmueble['nombre_inmueble'])) {
				 
		        $_SESSION['error'] = "La direcci&oacute;n del inmueble no es correcta.";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['nombre_inmueble'])>40){
		        	
		            $_SESSION['error'] = "La direcci&oacute;n es demasiado larga.";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosInmueble['num_inmueble'])){
			
			if(!preg_match('/^[0-9]{9,9}$/', $datosInmueble['num_inmueble'])) {
				 
		        $_SESSION['error'] = "El campo n&uacutemero no puede contener letras.";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['num_inmueble'])>4){
		        	
		            $_SESSION['error'] = "N&uacute;mero demasiado largo.";
					
		            return false;
					
		        }
			}	
		        
		}if(isset($datosInmueble['piso_inmueble'])){
			
			if(strlen($datosInmueble['piso_inmueble'])>6){
			        	
		    	$_SESSION['error'] = "Piso/Puerta demasiado largo.";
						
		        return false;
		        
			}
			
		}if(isset($datosInmueble['cp'])){
			
			if(!preg_match('/^[0-9]{5,5}$/', $datosInmueble['cp'])) {
				 
		        $_SESSION['error'] = "El c&oacute;digo postal debe ser un n&uacute;mero";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['cp'])>5){
		        	
		            $_SESSION['error'] = "El tama&ntilde;o del c&oacute;digo postal no es correcto";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosInmueble['provincia_inmueble'])){
			
			if(!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\- ]+$/', $datosInmueble['provincia_inmueble'])) {
				 
		        $_SESSION['error'] = "El campo Provincia s&oacute;lo permite texto";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['provincia_inmueble'])>30){
		        	
		            $_SESSION['error'] = "El campo Provincia supera la longitud permitida de 30 caracteres";
					
		            return false;
					
		        }
		        
		    }
			
		}if(isset($datosInmueble['metros_inmueble'])){
			
			if(!preg_match('/^[0-9]{5,5}$/', $datosInmueble['metros_inmueble'])) {
				 
		        $_SESSION['error'] = "El tama&nacute;o debe ser un n&uacute;mero";
		        
				return false;
				
		    }else{
		    	
		        if(strlen($datosInmueble['metros_inmueble'])>5){
		        	
		            $_SESSION['error'] = "El tama&ntilde;o de metros cuadrados no es correcto.";
					
		            return false;
					
		        }
		        
		    }
			
		}
		
		return $exito;
		
	}
	
?>	