<?php

		include_once '../plantillas/importaciones.php';
		include_once '../funciones/core.php';
		include_once '../funciones/admin.php';
		include_once '../funciones/inmueble.php';
		include_once '../funciones/registro.php';
		include_once '../fpdf/fpdf.php';
		
		
		$idInmueble = $_GET['id'];
		$pdf = TRUE;
		$inquilino = null;
		
		$datosUsuario = get_datosUsuario_from_IdInmueble($idInmueble,$pdf);
		
		//$propietario = "Nombre: ".$datosUsuario['Nombre']." Apellidos: ".$datosUsuario['Apellidos']." DNI: ".$datosUsuario['DNI'].
		//				  "Email: ".$datosUsuario['Email']." Teléfono: ".$datosUsuario['Telefono'];
		
		$datosInquilinos = get_datosInquilinos_from_IdInmueble($idInmueble,$pdf);
		
		foreach ($datosInquilinos as $key => $value) {
			
			$inquilino .= $value['Nombre']." ".$value['Apellidos']." / ".$value['DNI'].
						  " / ".$value['Email']." / ".$value['Telefono']."\n";
			
			$usuario = $value['Usuario']; $pass = $value['Password']; $email = $value['Email'];
						  
			$mensaje = "Ha sido dado de alta en Alquilook, sus datos de ingreso son los siguientes:\r\n"; 
	
				    $mensaje .= "<br><br>
					   			 Nombre de Usuario: <b>$usuario</b> \r\n<br>
					    		 Contraseña: <b>$pass</b> \r\n<br>";
								 
					$mensaje .= "<br><br>Para acceder a alquilook pulse el siguiente enlace<br><br>
								<a href='http://www.alquilook.com'><b>www.alquilook.com</b></a>";			 
					            
				    $headers = "MIME-Version: 1.0\r\n";
				    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
				    $headers .= "From: info@alquilook.com\r\n";
					
					mail($email, 'Alquilook: Confirmación registro de Inquilino', $mensaje, $headers);			  
			
		}
		
		$datosInmueble = get_datosInmueble($idInmueble,$pdf);
		
		$suministros = null;
		
		if($datosInmueble['Luz'] == 1){
			
			$suministros .= " Luz ";
			
		}if($datosInmueble['Agua'] == 1){
			
			$suministros .= " Agua ";
			
		}if($datosInmueble['Gas'] == 1){
			
			$suministros .= " Gas ";
			
		}
		
		//$inmueble = "TipoInmueble: ".$datosInmueble['TipoInmueble']." TipoContrato: ".$datosInmueble['TipoContrato']." Direccion: ".$datosInmueble['Direccion'].
		//  			  " CP: ".$datosInmueble['CP']." Municipio: ".$datosInmueble['Municipio']." Provincia: ".$datosInmueble['Provincia']
		//		    	  ." NumHabitaciones: ".$datosInmueble['NumHabitaciones']." NumServicios: ".$datosInmueble['NumServicios']." Metros: ".$datosInmueble['Metros']
		//				  ." Valor: ".$datosInmueble['Valor']." ValorMobiliario: ".$datosInmueble['ValorMobiliario']."    Suministros: ".$suministros;
		
		$datosEstancias = get_datosEstancias_from_IdInmueble($idInmueble);
		
		
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','',18);
		$pdf->MultiCell(150, 10, "Datos del propietario:");
		$pdf->SetFont('Arial','',10);
		$nompro = utf8_decode("Nombre: ".$datosUsuario['Nombre']);
		$pdf->MultiCell(150, 5, $nompro);
		$apepro = utf8_decode("Apellidos: ".$datosUsuario['Apellidos']);
		$pdf->MultiCell(150, 5, $apepro);
		$pdf->MultiCell(150, 5, "DNI: ".$datosUsuario['DNI']);
		$pdf->MultiCell(150, 5, "Email: ".$datosUsuario['Email']);
		$telefono = utf8_decode("Teléfono: ".$datosUsuario['Telefono']);
		$pdf->MultiCell(150, 5, $telefono); 
		$pdf->Ln();
		$pdf->SetFont('Arial','',18);
		$pdf->MultiCell(150, 10, "Datos del inquilino/os"); $inquilino = utf8_decode($inquilino);
		$pdf->SetFont('Arial','',10);
		$pdf->MultiCell(150, 5, $inquilino);
		$pdf->Ln();
		$pdf->SetFont('Arial','',18);
		$pdf->MultiCell(150, 10, "Datos del inmueble");
		$pdf->SetFont('Arial','',10);
		$tipinm = utf8_decode("Tipo de inmueble: ".$datosInmueble['TipoInmueble']);
		$pdf->MultiCell(150, 5, $tipinm);
		$planinm = utf8_decode("Tipo de plan: ".$datosInmueble['TipoContrato']);
		$pdf->MultiCell(150, 5, $planinm);	
		$pdf->MultiCell(150, 5, "Mensualidad del inmueble: ".$datosInmueble['Valor']." euros");
		$dirinm = utf8_decode("Dirección del inmueble: ".$datosInmueble['Direccion']);
		$pdf->MultiCell(150, 5, $dirinm);
		$muninm = utf8_decode("Población: ".$datosInmueble['Municipio']);
		$pdf->MultiCell(150, 5, $muninm);
		$pdf->MultiCell(150, 5, "CP: ".$datosInmueble['CP']);
		$proinm = utf8_decode("Provincia: ".$datosInmueble['Provincia']);
		$pdf->MultiCell(150, 5, $proinm);
		$pdf->MultiCell(150, 5, "Metros: ".$datosInmueble['Metros']);
		$pdf->MultiCell(150, 5, "Suministros: ".$suministros);
		$habinm = utf8_decode("Nº de habitaciones: ".$datosInmueble['NumHabitaciones']);
		$pdf->MultiCell(150, 5, $habinm);
		$aseinm = utf8_decode("Nº de aseos: ".$datosInmueble['NumServicios']);
		$pdf->MultiCell(150, 5, $aseinm);
		
		$pdf->MultiCell(150, 5, "Valor del mobiliario: ".$datosInmueble['ValorMobiliario']." euros");
		ob_end_clean();
		$pdf->Output();



?>