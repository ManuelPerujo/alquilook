<?php 

	function get_tablas_filtros_y_opciones($tabla,$idTabla,$arrayAtributos,$arrayFiltro,$arrayOpciones,$arrayOrden){
            
        $filtro = filtros_consulta($arrayFiltro);
        $orden = orden_consulta($arrayOrden);
        
        echo "<table class='tabla'>";
        echo "<tr>";
                       
        foreach ($arrayAtributos as $key => $value) {
            echo "<th>$value</th>";
        }
        
        if($arrayOpciones['opciones'] == TRUE){
            echo "<th>Opciones</th>";    
        }
        
        echo "</tr>";
        
        $bd = new core();
        $bd->ConectaBD();
        
        $seleccion = implode(",", $arrayAtributos);
        
        if(count($arrayFiltro) != 0){
            $query1 = "select $idTabla from $tabla where $filtro";
        }else{
            $query1 = "select $idTabla from $tabla";    
        }
        
        if(count($arrayOrden) != 0){
            $query1.= " ".$orden; 
        }
                    
        $result = $bd->query($query1);
        
        if($result->rowCount() != 0) {
            /*PDO::FETCH_ASSOC: devuelve un array cuyos indices son los nombres de los campos del resultado de la consulta*/ 
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($row as $key ) {
                $selector = $key[$idTabla];        
                $query2 = "select $seleccion from $tabla where $idTabla = '$selector' ";
                $result2 = $bd->query($query2);
                        
                if($result2->rowCount() != 0){
                    $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                }
                        
                echo "<tr>";
                 
                $direccion =  "../sesion/control_datos.php?$idTabla=".$selector;
                
                if(basename($_SERVER['PHP_SELF']) == "buzon.php"){
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        echo "<td>$contenido</td>";
                    }
                }else{
                    foreach ($row2 as $key => $value2) {
                        $contenido = wordwrap($value2, 12);                            
                        echo "<td><a href=$direccion>$contenido</a></td>";                
                    }
                }          
                
                
                if($arrayOpciones['opciones'] == TRUE){
                    echo "<td>";
                    if($arrayOpciones['borrar'] == TRUE){
                        $direccion1 = '../sesion/control_erase.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector;
                        echo "<a href=$direccion1 title='eliminar'><img src='../imagenes/iconos/eliminar.jpg' /></a>";    
                    }if($arrayOpciones['modificar'] == TRUE){
                        $direccion2 = '../sesion/control_up.php?tabla='.$tabla.'&idTabla='.$idTabla.'&id='.$selector.'&seleccion='.$seleccion;
                        echo "<a href=$direccion2 title='editar'><img src='../imagenes/iconos/editar.jpg' /></a>";    
                    }if($arrayOpciones['responder'] == TRUE){
                        $direccion3 = '../sesion/control_buzon_responder.php?id='.$selector;
                        echo "<a href=$direccion3 title='responder'><img src='../imagenes/iconos/responder.jpg' /></a>";
                    }if($arrayOpciones['pagar'] == TRUE){
                        
                    }if($arrayOpciones['amistad'] == TRUE){
                        $direccion4 = '../sesion/control_amistad.php?id='.$selector;
                        echo "<a href=$direccion4 title='agregar a amigos'><img src='../imagenes/iconos/amistad.jpg' /></a>";
                    }if($arrayOpciones['ver_mas'] == TRUE){
                        echo "<button id='ver_mas' onclick='showMensaje($selector);' title='ver mas'><img src='../imagenes/iconos/ver_mas.png' /></button>";
                    }
                    
                    echo "</td>";
                                  
                }
                echo "</tr>";
                    
            }
        }
          
        echo "</table>";
        
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
    
    function orden_consulta($arrayOrden){
        
        $texto = null;
        
        if(count($arrayOrden) == 3){
            
            $texto = "order by ".$arrayOrden[1]." ".$arrayOrden[2]." limit ".$arrayOrden[3];
                
        }if(count($arrayOrden) == 2){
            
            $texto = "order by ".$arrayOrden[1]." ".$arrayOrden[2];
            
        }
        
        return $texto;    
    }
	
?>	