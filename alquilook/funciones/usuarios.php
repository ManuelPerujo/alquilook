<?php 

	function get_dato_usuario($id_usuario, $arrayDatos){
		
		$bd = new core();
		
		$atributos = implode(",", $arrayDatos);
		
		try{
            
            $bd->ConectaBD();
     
            $query = "select $atributos from usuarios where IdUsuario = '$id_usuario' and UsuarioActivo = '1' ";
			
            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = TRUE;
                
            }else{
            
                $row = $result->fetch(PDO::FETCH_ASSOC);
												
				return $row;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}

	function filtros_consulta($arrayFiltro){
     
        $texto = null;
        $count = 0;
        
        foreach ($arrayFiltro as $key => $value) {
            
            $tmp = array_keys($arrayFiltro,$value);
                        
            if(count($arrayFiltro) == 1){
                
                foreach ($tmp as $key2 => $value2) {
                    
                    $tmp2 = $value2." = ".$value;
                    $texto .= $tmp2;
                        
                }
                
            }else{
                
                $tmp3 = " and ";
                
                foreach ($tmp as $key2 => $value2) {
                    $count++;
                    if($count < count($arrayFiltro)){
                            
                        $tmp2 = $value2."=".$value;
                        $texto .= $tmp2.$tmp3;            
                        
                    }if($count == count($arrayFiltro)){
                        
                        $tmp2 = $value2."=".$value;
                        $texto .= $tmp2;
                        
                    }
                }
            }
        }    
                            
               
        return $texto;
    }

	function get_IdPropietario($idUsuario){
		
		$bd = new core();
		
		$query = "SELECT propietario.IdPropietario FROM usuarios INNER JOIN propietario WHERE propietario.IdUsuario = '$idUsuario'";
		$result = $bd->query($query);
		
		$row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['IdPropietario'];
		
	}
	
	function get_mensaje($idMensaje){
		
		$mensaje = null;
		
		$bd = new core();
		
		$remitente = "<h5 class='media-heading'>Alquilook</h5>";
		
		$query = "select * from mensaje where IdMensaje = '$idMensaje' ";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		if(basename($_SERVER['PHP_SELF']) == 'mensaje_admin.php'){
			
			$idUsuario = $row['IdRemitente'];
			
			$query2 = "select Nombre,Apellidos from usuarios where IdUsuario = '$idUsuario'";
			
			$result2 = $bd->query($query2); $row2 = $result2->fetch(PDO::FETCH_ASSOC);
			
			$remitente = "<h5 class='media-heading'>".$row2['Nombre']." ".$row2['Apellidos']."</h5>";
			
		}
		
		$mensaje = "<div class='media-body'>
								  	".$remitente."
								    <h6 class='media-heading'>".$row['Fecha']."</h6>
								    <p class='mayusculas'>Asunto: ".$row['Titulo']."</p>
								    <hr class='grissimple'/>
								    <p class='ficha2'>
								    ".$row['Contenido']."
								    </p>
							  </div>";
							  
		return $mensaje;					  
		
	}

	function get_rowDatos_from_IdMensaje($idMensaje){
		
		$bd = new core();
		
		$query = "select Titulo, IdRemitente from mensaje where IdMensaje = '$idMensaje'";	
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row;
		
	}
	
	
	
	
	
?>