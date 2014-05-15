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

$datosInquilinos = get_datosInquilinos_from_IdInmueble($idInmueble,$pdf);

foreach ($datosInquilinos as $key => $value) {
	
	$inquilino .= $value['Nombre']." apellidos: ".$value['Apellidos']." DNI: ".$value['DNI'].
				  " email: ".$value['Email']." teléfono: ".$value['Telefono'];
	
}

$datosInmueble = get_datosInmueble($idInmueble);
$datosEstancias = get_datosEstancias_from_IdInmueble($idInmueble);


$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(150, 10, "Aqui se van a reunir todos los colegas ".$inquilino."datos de usuario: ".$datosUsuario['Nombre']);
ob_end_clean();
$pdf->Output();
?>