<?php

		include_once '../plantillas/importaciones.php';
		include_once '../funciones/core.php';
		include_once '../funciones/admin.php';
		include_once '../funciones/inmueble.php';
		include_once '../funciones/registro.php';
		require_once('fpdf/fpdf.php');
		
		$idInmueble = $_GET['id'];
		$pdf = TRUE;
		$inquilino = null;
		
		$datosUsuario = get_datosUsuario_from_IdInmueble($idInmueble,$pdf);
		
		$propietario = "nombre: ".$datosUsuario['Nombre']." apellidos: ".$datosUsuario['Apellidos']." DNI: ".$datosUsuario['DNI'].
						  " email: ".$datosUsuario['Email']." teléfono: ".$datosUsuario['Telefono'];
		
		$datosInquilinos = get_datosInquilinos_from_IdInmueble($idInmueble,$pdf);
		
		foreach ($datosInquilinos as $key => $value) {
			
			$inquilino .= "nombre: ".$value['Nombre']." apellidos: ".$value['Apellidos']." DNI: ".$value['DNI'].
						  " email: ".$value['Email']." teléfono: ".$value['Telefono'];
			
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
		
		$inmueble = "TipoInmueble: ".$datosInmueble['TipoInmueble']." TipoContrato: ".$datosInmueble['TipoContrato']." Direccion: ".$datosInmueble['Direccion'].
						  " CP: ".$datosInmueble['CP']." Municipio: ".$datosInmueble['Municipio']." Provincia: ".$datosInmueble['Provincia']
						  ." NumHabitaciones: ".$datosInmueble['NumHabitaciones']." NumServicios: ".$datosInmueble['NumServicios']." Metros: ".$datosInmueble['Metros']
						  ." Valor: ".$datosInmueble['Valor']." ValorMobiliario: ".$datosInmueble['ValorMobiliario']."    Suministros: ".$suministros;
		
		$datosEstancias = get_datosEstancias_from_IdInmueble($idInmueble);
		
		
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->MultiCell(150, 10, "DATOS PROPIETARIO:"); $propietario = utf8_decode($propietario);
		$pdf->MultiCell(150, 10, $propietario);
		$pdf->MultiCell(150, 10, "------------------------------------------------------------------------------");
		$pdf->MultiCell(150, 10, "DATOS INQUILINOS"); $inquilino = utf8_decode($inquilino);
		$pdf->MultiCell(150, 10, $inquilino);
		$pdf->MultiCell(150, 10, "------------------------------------------------------------------------------");
		$pdf->MultiCell(150, 10, "DATOS INMUEBLE"); $inmueble = utf8_decode($inmueble);
		$pdf->MultiCell(150, 10, $inmueble);
		$pdf->MultiCell(150, 10, "------------------------------------------------------------------------------");
		ob_end_clean();
		$pdf->Output();



?>