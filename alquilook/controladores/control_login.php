<?php
    
    session_start();

    include ("../funciones/core.php");
    include ("../funciones/login.php");
    
    
    $error = true;
    
    if ($_POST){
        if(isset($_POST['usuario_propietario']) && isset($_POST['pass_propietario'])){
            
            $usuario = $_POST['usuario_propietario'];
            $password = $_POST['pass_propietario'];
                
        }if(isset($_POST['usuario_inquilino']) && isset($_POST['pass_inquilino'])){
            
            $usuario = $_POST['usuario_inquilino'];
            $password = $_POST['pass_inquilino'];
            
        }
        
        $_SESSION['IdUsuario_sesion'] = control_login($usuario, $password);
        
        if(isset($_SESSION['IdUsuario_sesion'])){
 
            $error = false;
            $_SESSION['Usuario'] = $usuario;
            $id_admin = esAdministrador($_SESSION['IdUsuario_sesion']);
            
            if(isset($id_admin) && $id_admin != FALSE){
                
                $_SESSION['admin'] = "SI";
                $_SESSION['UsuarioAdmin'] = get_usuario_admin($_SESSION['IdUsuario_sesion']);
                
            }else{
                
                $_SESSION['admin'] = "NO";
                
            }
            
        } else{
            
            $error = true;
            
        }
        
    }
    
    header ("Location: ../index.php");
    
    //evalua_login($error, $_SESSION['IdUsuario_sesion']);

?>