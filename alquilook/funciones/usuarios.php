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
	
	function get_mensaje($idMensaje,$count,$titulo){
		
		$mensaje = null;
		
		$bd = new core();
						
		$query = "select * from mensaje where IdMensaje = '$idMensaje' ";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		$idUsuario = $row['IdRemitente'];
			
		$query2 = "select Nombre,Apellidos,Tipo from usuarios where IdUsuario = '$idUsuario'";
			
		$result2 = $bd->query($query2); $row2 = $result2->fetch(PDO::FETCH_ASSOC);
		
		if($row2['Tipo'] == 'Admin'){
			
			$destinatario = "De: ALQUILOOK";
			
		}else{
			
			$destinatario = "De: ".$row2['Nombre']." ".$row2['Apellidos'];	
			
		}
							
		$mensaje = "<div class='col-xs-12'>	
						<div class='panel-group' id='accordion".$count."'>
							<div class='panel panel-default'>
								<div class='panel-heading'>
								     <h6 class='panel-title'>
						             <a class='enlace3 mayusculas' data-toggle='collapse' data-parent='#accordion".$count."' href='#collapse".$count."'>
							         <img class='imagenboton2 steel-grey2 img-circle' src='../../img/botones/propietario.png'>
									 &nbsp;&nbsp;&nbsp;
									 ".$destinatario." &nbsp;&nbsp;|&nbsp;&nbsp; Asunto: " .$titulo." &nbsp;&nbsp;|&nbsp;&nbsp; ".$row['Fecha']."
									 </a>
									 </h6>
								</div>
								<div id='collapse".$count."' class='panel-collapse collapse'>
									<div class='panel-body'>
								   		<p class='ficha'>".$row['Contenido']."</p>
									</div>
								</div>
							</div>
						</div>       
					</div>";
							  
		return $mensaje;					  
		
	}

	function get_last_IdMensaje_from_conversacion($idConversacion){
				
		$bd = new core();
		
		$query = "select IdMensaje from mensaje where IdConversacion = '$idConversacion' order by IdMensaje desc limit 1";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['IdMensaje'];	
		
	}	
	
	function get_IdRemitente_mensaje($idMensaje){
		
		$bd = new core();
		
		$query = "select IdRemitente from mensaje where IdMensaje = '$idMensaje'";
		
		$result = $bd->query($query); $row = $result->fetch(PDO::FETCH_ASSOC);
		
		return $row['IdRemitente'];
		
	}
	
	
	
	
?>