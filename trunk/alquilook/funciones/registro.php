<?php

	function valida_link($codigo, $usuario){
		
		$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario from usuarios where Usuario = '$usuario' and CodigoActivacion = '$codigo' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_usuario = $row['IdUsuario'];
				$query2 = "update usuarios set UsuarioActivo = '1' where IdUsuario = '$id_usuario' ";
                $bd->query($query2);
				
				$_SESSION["IdUsuario_sesion"] = $id_usuario;
				
				return true;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}


	function valida_propietario($usuario,$codigo){
				
			$bd = new core();
		
		try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario from usuarios where Usuario = '$usuario' and CodigoActivacion = '$codigo' ";

            $result = $bd->query($query);
      
            if($result->rowCount() == 0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $row = $result->fetch(PDO::FETCH_ASSOC);
				
				$id_usuario = $row['IdUsuario'];
				$query2 = "insert into propietario (IdPropietario, IdUsuario) values ('', $id_usuario)";
                $bd->query($query2);
				
				return true;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
		
	}










?>