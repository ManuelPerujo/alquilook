<?php
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,10,'Aaaayyy Gorrion!!!!');
$pdf->Output();
?>