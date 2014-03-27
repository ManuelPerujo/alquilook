<?php
session_start();

if(!$_POST){

    echo "no pasa POST";
    exit();
}

include_once("../funciones/core.php");
include_once("../funciones/registro.php");
//include ("funciones/validacion_datos.php");


        
        extract($_POST);
        
        $tipoEstancia = $_POST["tipoEstancia"];
		
		// mobiliario
		 
        $sofa = $_POST["sofa"];	$mesa = $_POST["mesa"]; $silla = $_POST["silla"]; 
        $cuadro = $_POST["cuadro"]; $camaInd = $_POST["camaIndividual"]; $camaDoble = $_POST["camaDoble"];
        $mesitaNoche = $_POST["mesitaNoche"]; $comoda = $_POST["comoda"]; $accesorioAseo = $_POST["accesoriosAseo"];
        $muebleAseo = $_POST["muebleAseo"]; $espejo = $_POST["espejo"]; $hidromasaje = $_POST["hidromasaje"];
		
		//electrodomesticos
		
		$television = $_POST["television"];	$dvd = $_POST["dvd"]; $equipoMusica = $_POST["equipoMusica"];
		$frigorifico = $_POST["frigorifico"]; $vitroceramica = $_POST["vitroceramica"]; $horno = $_POST["horno"];
        $microondas = $_POST["microondas"]; $lavadora = $_POST["lavadora"]; $secadora = $_POST["secadora"];
        $lavavajillas = $_POST["lavavajillas"]; $aspiradora = $_POST["aspiradora"]; $termo = $_POST["termo"];
				
        $_SESSION["IdInmueble"] = get_IdInmueble($_SESSION['identifica_inmueble_direccion'], $_SESSION['identifica_inmueble_tipo']);
		$IdInmueble = $_SESSION["IdInmueble"];
		
		$arrayArticulos = array('Sofa'=>$sofa, 'Mesa'=>$mesa, 'Silla'=>$silla, 'Cuadro'=>$cuadro, 'Cama Individual'=>$camaInd, 'Cama Doble'=>$camaDoble,
							   'Mesita Noche'=>$mesitaNoche, 'Comoda'=>$comoda, 'Accesorio Servicio'=>$accesorioAseo, 'Mueble Aseo'=>$muebleAseo,
							   'Espejo'=>$espejo, 'Hidromasaje'=>$hidromasaje, 'Television'=>$television, 'Dvd'=>$dvd, 'Equipo Sonido'=>$equipoMusica,
							   'Frigorifico'=>$frigorifico, 'Vitroceramica'=>$vitroceramica, 'Horno'=>$horno, 'Microondas'=>$microondas,
							   'Lavadora'=>$lavadora, 'Secadora'=>$secadora, 'Lavavajillas'=>$lavavajillas, 'Aspiradora'=>$aspiradora, 'Termo'=>$termo);
		
		$observaciones = $_POST['observacion'];
						
        $bd = new core();

        try{
            
            $bd->ConectaBD();
                 
            /*insertamos los datos de la nueva estancia*/
            
            $query1 = "insert into estancia (IdEstancia, IdInmueble, Tipo) values ('','$IdInmueble','$tipoEstancia') ";
			$query2 = 'SELECT LAST_INSERT_ID()';
			// $bd->query($query3);
            $bd->queryNoDesconecta($query1);
            $result = $bd->queryDesconecta($query2);
            $row = $result->fetch(PDO::FETCH_ASSOC);

			$IdEstancia = $row['LAST_INSERT_ID()'];
            
            array_push($_SESSION['ArrayIdEstancia'],$IdEstancia);
			
            $query3 = crea_articulo($IdInmueble, $IdEstancia, $arrayArticulos);
			
			$bd->query($query3);
			
			$query4 = "insert into observaciones_estancia (IdObservaciones, IdInmueble, IdEstancia, Observacion)
					  values ('','$IdInmueble','$IdEstancia','$observacion')";
			
			echo $query4.$observaciones;
					  
			$bd->query($query4);
			
            header("Location: ../vistas/inmueble/registro_estancia.php");    
                
            

        }catch(PDOException $except) {
            echo "Capturada una excepcion PDO: " . $except->getFile() .":". $except->getLine()."<br/>";
        }
    
    
                   
    






?>