<?php

    session_start();
    
    if(!$_POST){
    
        echo "no pasa POST";
        exit();
    }
    
    
    include_once("../funciones/core.php");
    include_once("../funciones/usuario.php");

    extract($_POST);
    
        $usuario = $_POST["usuario"]; $email = $_POST["email"];  $nombre = $_POST["nombre"];  $apellidos = $_POST["apellidos"];  
        $dni = $_POST["dni"];  $fechaNacimiento = $_POST["fecha_nacimiento"]; $telefono = $_POST["telefono"]; $domicilio = $_POST["domicilio"];  $cp = $_POST["cp"];
        $provincia = $_POST["provincia"];  $poblacion = $_POST["poblacion"];  $profesion = $_POST["profesion"];  $diagnostico = $_POST["diagnostico"];
        $fechaDiagnostico= $_POST["anyo_diag"];  $centroDiagnostico = $_POST["centro_diag"];  $doctor = $_POST["doctor"];  $grado = $_POST["grado"];
    
    
    if(isset($_SESSION['update']) && $_SESSION['update'] == TRUE){
            $_SESSION['update'] = null;
            
            $idUsuario = $_SESSION['update_id'];
            $query = "update usuarios set Usuario='$usuario',Email='$email',Nombre='$nombre',Apellidos='$apellidos',DNI='$dni',FechaNacimiento='$fechaNacimiento',
                      Telefono='$telefono',Domicilio='$domicilio',CP='$cp',Poblacion='$poblacion',Provincia='$provincia',Profesion='$profesion',
                      Diagnostico='$diagnostico',FechaDiagnostico='$fechaDiagnostico',CentroDiagnostico='$centroDiagnostico',Doctor='$doctor',GradoMinusvalia='$grado'
                      where IdUsuario ='$idUsuario'";                      
    }
    
    try{
        
        $bd = new core();
        $bd->ConectaBD();
        
        $bd->conexion->query($query);
        
        
    }catch(PDOException $except) {
        echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
    }    
    $_SESSION['update_id'] = null;    
    header("Location: ../admin/usuarios.php");
    
    
    
?>