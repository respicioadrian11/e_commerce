<?php
require ('fpdf181/fpdf.php');

class PDF extends fpdf
{
function Header()
{
 
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Sales Reports',0,1,'C');
    $this->Ln(10);
  
    parent::Header();
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->Output();
?>