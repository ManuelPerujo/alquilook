<?php
    
    session_start();

    include ("../funciones/core.php");
    include ("../funciones/login.php");
    
    $usuario; $password;
    $error = true;
    $id_usuario = null;
    $direccion;
    $tipo = null;
	
	        
    if ($_POST && !empty($_POST)){
        if(isset($_POST['usuario_propietario']) && !empty($_POST['usuario_propietario'])
		   && isset($_POST['pass_propietario']) && !empty($_POST['pass_propietario'])){
            
            $direccion = "../vistas/inmueble/tabla_inmuebles_pro.php";
            $usuario = $_POST['usuario_propietario'];
            $password = $_POST['pass_propietario'];
            $tipo = "Propietario";
			    
        }if(isset($_POST['usuario_inquilino']) && !empty($_POST['usuario_inquilino'])
		    && isset($_POST['pass_inquilino']) && !empty($_POST['pass_inquilino'])){
            
            $direccion = "../vistas/inmueble/tabla_inmuebles_inq.php";
            $usuario = $_POST['usuario_inquilino'];
            $password = $_POST['pass_inquilino'];
            $tipo = "Inquilino";
            
        }if(isset($_POST['usuario_admin']) && !empty($_POST['usuario_admin'])
           && !empty($_POST['pass_admin']) && isset($_POST['pass_admin'])){
				
        	$usuario = $_POST['usuario_admin'];
            $password = $_POST['pass_admin'];
			$tipo = "Admin";
			
        }if(isset($_POST['usuario_inmobiliaria']) && !empty($_POST['usuario_inmobiliaria'])
           && !empty($_POST['pass_inmobiliaria']) && isset($_POST['pass_inmobiliaria'])){
			
			$direccion = "../vistas/inquilino/tabla_inmuebles_pro.php";	
        	$usuario = $_POST['usuario_inmobiliaria'];
            $password = $_POST['pass_inmobiliaria'];
			$tipo = "Inmobiliaria";
			
        }else{
        				
        	if((empty($_POST['usuario_admin']) && isset($_POST['usuario_admin']))
        	  || (empty($_POST['pass_admin']) && isset($_POST['pass_admin']))){
        		
				header("Location: ../vistas/admin/perfil_admin.php");
				
        	}else{
        				
        		header("Location: ../index.php");	
        		
        	}
			
		}
        
	}
    
	if(!empty($usuario) && !empty($password)){
		
		if(basename($_SERVER['HTTP_REFERER']) == 'perfil_admin.php'){
			
			$id_usuario = control_login_admin($usuario, $password);
			
		}else{
		
			$id_usuario = control_login($usuario, $password);
			
		}
			  
		
	        
		if(isset($id_usuario) && $id_usuario != null && $id_usuario != FALSE){
		 
			$error = false;
		    $id_admin = esAdministrador($id_usuario);
		            
		    if(isset($id_admin) && $id_admin != FALSE){
		                
		    	$_SESSION['admin'] = TRUE;
		        $direccion = "../vistas/admin/tabla_usuarios_admin.php";                        
		    }
			
			evalua_login($error, $id_usuario,$tipo);
	    
	    	header ("Location: ".$direccion);
		            
		}else{
		            
			if(basename($_SERVER['HTTP_REFERER']) == 'perfil_admin.php'){
				
				header("Location: ../vistas/admin/perfil_admin.php");
				
			}if(basename($_SERVER['HTTP_REFERER']) == 'index.php'){
				
				header ("Location: ../index.php");	
				
			}
		            
		}
	    
	}
    
    
    

?>