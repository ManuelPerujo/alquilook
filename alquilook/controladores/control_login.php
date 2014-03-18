<?php
    
    session_start();

    include ("../funciones/core.php");
    include ("../funciones/login.php");
    
    $usuario; $password;
    $error = true;
    $id_usuario = null;
    $direccion;
            
    if ($_POST){
        if(isset($_POST['usuario_propietario']) && isset($_POST['pass_propietario'])){
            
            $direccion = "../vistas/propietario/perfil_propietario.php";
            $usuario = $_POST['usuario_propietario'];
            $password = $_POST['pass_propietario'];
                
        }if(isset($_POST['usuario_inquilino']) && isset($_POST['pass_inquilino'])){
            
            $direccion = "../vistas/inquilino/perfil_inquilino.php";
            $usuario = $_POST['usuario_inquilino'];
            $password = $_POST['pass_inquilino'];
            
        }
        
        $id_usuario = control_login($usuario, $password);
        
        if(isset($id_usuario)){
 
            $error = false;
            $id_admin = esAdministrador($id_usuario);
            
            if(isset($id_admin) && $id_admin != FALSE){
                
                $_SESSION['admin'] = "SI";
                                
            }else{
                
                $_SESSION['admin'] = "NO";
                
            }
            
        } else{
            
            $error = true;
            
        }
        
    }
    
    evalua_login($error, $id_usuario);
    
    header ("Location: ".$direccion);
    
    

?>