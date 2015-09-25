<?php
	session_start();
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
		
		var $widths;
		var $aligns;
		
		function SetWidths($w)
		{
		    //Set the array of column widths
		    $this->widths=$w;
		}
		
		function SetAligns($a)
		{
		    //Set the array of column alignments
		    $this->aligns=$a;
		}
		
		function Row($data)
		{
		    //Calculate the height of the row
		    $nb=0;
		    for($i=0;$i<count($data);$i++)
		        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
		    $h=5*$nb;
		    
		    //Issue a page break first if needed
		    $this->CheckPageBreak($h);
		    //Draw the cells of the row
		    $aligns =1;
		    for($i=0;$i<count($data);$i++)
		    {
		        $w=$this->widths[$i];
		        if($aligns == 3){
		        	$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'R';
		        	$aligns=1;
		        }
		        else{
			        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
			        $aligns++;
		        }
		        //Save the current position
		        $x=$this->GetX();
		        $y=$this->GetY();
		        //Draw the border
		        //$this->Rect($x,$y,$w,$h);
		        //Print the text
		        $this->MultiCell($w,5,$data[$i],0,$a);
		        //Put the position to the right of the cell
		        $this->SetXY($x+$w,$y);
		    }
		    //Go to the next line
		    $this->Ln($h);
		}
		
		function CheckPageBreak($h)
		{
		    //If the height h would cause an overflow, add a new page immediately
		    if($this->GetY()+$h>$this->PageBreakTrigger)
		        $this->AddPage($this->CurOrientation);
		}
		
		function NbLines($w,$txt)
		{
		    //Computes the number of lines a MultiCell of width w will take
		    $cw=&$this->CurrentFont['cw'];
		    if($w==0)
		        $w=$this->w-$this->rMargin-$this->x;
		    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
		    $s=str_replace("\r",'',$txt);
		    $nb=strlen($s);
		    if($nb>0 and $s[$nb-1]=="\n")
		        $nb--;
		    $sep=-1;
		    $i=0;
		    $j=0;
		    $l=0;
		    $nl=1;
		    while($i<$nb)
		    {
		        $c=$s[$i];
		        if($c=="\n")
		        {
		            $i++;
		            $sep=-1;
		            $j=$i;
		            $l=0;
		            $nl++;
		            continue;
		        }
		        if($c==' ')
		            $sep=$i;
		        $l+=$cw[$c];
		        if($l>$wmax)
		        {
		            if($sep==-1)
		            {
		                if($i==$j)
		                    $i++;
		            }
		            else
		                $i=$sep+1;
		            $sep=-1;
		            $j=$i;
		            $l=0;
		            $nl++;
		        }
		        else
		            $i++;
		    }
		    return $nl;
		}

	}
	$pdf = new PDF ("P","mm","a5");
	$pdf->AddPage();
	$pdf->SetFont('Arial','',8);
	
	//Table with 20 rows and 4 columns
	$pdf->SetWidths(array(24,90,16,40));
	srand(microtime()*1000000);
	for($i=0;$i<count($_SESSION["basket"]);$i++){
		$quantity =$_SESSION["basket"][$i]["quantity"];
	    $pdf->Row(array($quantity."x", $_SESSION["basket"][$i]["Item"]->Name, $_SESSION["basket"][$i]["Item"]->Price*$quantity));
	}
	$filename="Orders/test.pdf";
	$pdf->Output();
	
?>