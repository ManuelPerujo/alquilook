<?php
session_start();

if(!$_POST){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
        $usuario = $_POST["usuario_propietario"];  $pass = $_POST["pass_propietario"];  $email = $_POST["email_propietario"];
        $nombre = $_POST["nombre_propietario"]; $apellidos = $_POST["apellidos_propietario"]; $dni = $_POST["dni_propietario"];
        $telefono = $_POST["telefono_propietario"]; $domicilio = $_POST["domicilio_propietario"];  $cp = $_POST["cp_propietario"];
        $provincia = $_POST["provincia_propietario"];  $poblacion = $_POST["poblacion_propietario"]; 
        
        $error = true;
  
        $bd = new core();

        try{
            
            $bd->ConectaBD();
     
            /*comprobamos que no existe el usuario en la bd */
            $query = "select IdUsuario from usuarios where DNI = '$dni' ";

            $result = $bd->conexion->query($query);
      
            if($result->rowCount()>0) {
                $_SESSION['erroRegistro'] = $error;
                
            }else{
            /*insertamos los datos del nuevo usuario*/
                $query = "insert into usuarios (IdUsuario, Usuario, Password, Email, Nombre, Apellidos, DNI,
                                                Telefono, Domicilio, CP, Municipio, Provincia)
                    values ('', '$usuario', '$pass', '$email', '$nombre', '$apellidos', '$dni',
                            '$telefono', '$domicilio', '$cp', '$poblacion', '$provincia')"; 
                            
                $bd->conexion->exec($query);
                $_SESSION['erroRegistro'] = FALSE;
                $_SESSION['bienvenida'] = true;
            }

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
        

    $_POST = array();
    
    
    header("Location: ../vistas/propietario/perfil_propietario.php");


?>