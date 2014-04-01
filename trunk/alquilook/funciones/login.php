<?php

function control_login($usuario, $password) {
/* comprueba en la base de datos si es correcto
el usuario y la contraseña. devuelve el id del usuario
o falso */

     $bd = new core();
     try{
         
        $bd->ConectaBD();
        $query= "select IdUsuario from usuarios where Usuario='$usuario' and Password ='$password'";
    
        $result = $bd->query($query);
    
        if($result->rowCount() != 0) {
            /*PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta */
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row['IdUsuario'];
        }else{
        	$_SESSION["error_log"] = TRUE;
        	return FALSE;
        }
        
     }catch(PDOException $except){
       echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";  
     }
}

function control_login_admin($usuario, $password) {
/* comprueba en la base de datos si es correcto
el usuario y la contraseña. devuelve el id del usuario
o falso */

     $bd = new core();
     try{
         
        $bd->ConectaBD();
        $query= "select IdUsuario from usuarios where Usuario='$usuario' and Password ='$password' and Admin = '1'";
    
        $result = $bd->query($query);
    
        if($result->rowCount() != 0) {
            /*PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta */
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row['IdUsuario'];
        }else{
        	$_SESSION["error_log"] = TRUE;
        	return FALSE;
        }
        
     }catch(PDOException $except){
       echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";  
     }
}
    
function esAdministrador($id_usuario){
    /* vemos en la base de datos si el usuario con $id esta
    en la tabla de administradores, y devuelve true.
    otro caso, devuelve false*/ 
    try{
        $bd = new core();
        $query= "select Admin from usuarios where IdUsuario = $id_usuario";
        $result = $bd->query($query);
        
        if($result->rowCount() != 0) {
                /* PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta */
                $row = $result->fetch(PDO::FETCH_ASSOC);
                return $row['Admin'];
        }
        
    }catch(PDOException $except){
       echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";  
    }
}
    
function evalua_login($error, $id_usuario){
    
    if($id_usuario != null){
        if($error){
            /* si la variable error es true, hubo algún error en el login*/ 
            $_SESSION["errorusuario"]="SI";
            $_SESSION["autentificado"]="NO";
            
			if(basename($_SERVER['HTTP_REFERER']) == 'perfil_admin.php'){
				
				header("Location: ../vistas/admin/perfil_admin.php");
				
			}if(basename($_SERVER['HTTP_REFERER']) == 'index.php'){
				
				header ("Location: ../index.php");	
				
			}
			
        }else{
            /* usuario y contrasena validos, defino una sesion y guardo datos*/ 
            $_SESSION["autentificado"]="SI";
            $_SESSION["IdUsuario_sesion"]=$id_usuario; //almacenamos en una variable de sesion el ID del usuario 
                        
        }
    }        
}

function get_usuario_admin($idUsuario){
        
        try{
            $bd = new core();
            $query= "select Usuario from usuarios where IdUsuario = $idUsuario";
            $result = $bd->query($query);
            
            if($result->rowCount() != 0) {
                    /*PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta */
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    return $row['Usuario'];
            }else{
                return false;
            }
        }catch(PDOException $except){
           echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";  
        }
    
    }

?>