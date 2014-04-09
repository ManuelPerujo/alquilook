<?php

	session_start();
	
	if(!$_POST || count($_POST) == 0){
	
	    echo "no pasa POST";
	    exit();
	}

	include_once("../funciones/core.php");



        
    extract($_POST);
        
	$idInmueble = $_POST['idInmueble'];
			
    $tipoInmueble = $_POST["tipoInmueble"]; $direccion = $_POST["direccion"]; $municipio = $_POST["municipio_inmueble"];
	$cp = $_POST["cp_inmueble"]; $provincia = $_POST["provincia_inmueble"]; $poblacion = $_POST["municipio_inmueble"];
	$metrosInmueble = $_POST['metros_inmueble']; $numHabitacion = $_POST['numero_habitaciones']; $numAseos = $_POST['numero_aseos']; 
        
    $error = true;
		        		
    $bd = new core();

					
	try{
            
	   	$bd->ConectaBD();
	     
	        
	    $query = "update inmueble set TipoInmueble='$tipoInmueble', Direccion='$direccion', CP='$cp', Municipio='$municipio',
	       		Provincia='$provincia', Provincia='$provincia', NumHabitaciones='$numHabitacion', NumServicios ='$numAseos',
	       		Metros='$metrosInmueble' where IdInmueble='$idInmueble'"; 
	                
		$bd->query($query);
	
	}catch(PDOException $except) {
	    	
	   	echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
			
	}	
			
	unset($_POST);
    
    header("Location: ../vistas/admin/editar_estancia_admin.php?idInmueble=".$idInmueble);
			
		
    
    
                   
    






?>