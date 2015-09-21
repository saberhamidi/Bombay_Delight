<?php
require('fpdf/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Hello World!');
	
	$filename="Orders/test.pdf";
	$pdf->Output("Orders/test.pdf", "F");
	
?>