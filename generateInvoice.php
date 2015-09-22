<?php
require('fpdf/fpdf.php');


	class PDF extends FPDF{
		// Page header
		function Header(){
		    // Logo
		    $this->Image('images/logo.png',10,10,50);
		    // Arial bold 15
		    $this->SetFont('Arial','I',10);
		    // Move to the right
		    $this->Cell(1);
		    // Title
		    $this->Cell(0,20,'3A Manor Farm Road, Southampton, Hampshire, SO18 1NN','C');
		    $this->Ln(7);
		    
		    $this->SetFont('Arial','',10);
		    $this->Cell(0,25,'Order No: 88998766','C');
		    
		    $this->Ln(7);
		    $this->Cell(0, 27, 'Quantity', 'C');
		    
		    $this->Cell(-105);
		    $this->Cell(5, 27, 'Name', 'C');
		    
		    $this->Cell(90);
		    $this->Cell(10, 27, iconv("UTF-8", "ISO-8859-1", "£").' Price', 'C');
		    
		    $this->line(10,40,140,40);
		    
		    // Line break
		    $this->Ln(20);
		}
	}
	
	$pdf = new PDF ("P","mm","a5");
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,15,'Hello World!');
	
	$filename="Orders/test.pdf";
	$pdf->Output();
	
?>