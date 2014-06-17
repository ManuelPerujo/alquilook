<?php
    session_start();

    if(!$_POST){
    
        echo "no pasa POST";
        exit();
    }
    
    
    include_once("../funciones/core.php");
	include_once('../funciones/admin.php');
    
    
    
    extract($_POST);
            
    $busqueda = $_POST['busqueda']; $select_busqueda = $_POST['tipoBusqueda'];
    
    $bd = new core();
    $bd->ConectaBD();
    
    $query = ("select IdUsuario from usuarios where $select_busqueda like '".$busqueda."%' and not Tipo = 'Inmobiliaria'");
    $result = $bd->query($query);
    
    if($result->rowCount() != 0){
    	
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['arrayId_filtro'] = $row;
		
    }else{
    	
        $_SESSION['busqueda_vacia'] = TRUE;
        
    }
	
	        
    header("Location: ".$_SERVER['HTTP_REFERER']);
    
    
    
    
    
    
    
    
?>