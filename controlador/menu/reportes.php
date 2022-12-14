<?php
require('../../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../../fpdf/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(100,10,'PLATILLOS',1,0,'C');
    // Salto de línea
    $this->Ln(40);
    $this->Cell(70,10,'NOMBRE PLATILLO',1,0,'C',0);
    $this->Cell(60,10,'TIPO PLATILLO',1,0,'C',0);
    $this->Cell(40,10,'PRECIO',1,0,'C',0);
    
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require'../base.php';
$consulta="SELECT * FROM PLATILLO ";
$resultado=mysqli_query($conn,$consulta);
//$resultado=$enlace->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while($mostrar=$resultado->fetch_assoc()){

    $pdf->Cell(70,10,$mostrar['NOM_PLATILLO'],1,0,'c',0);
    $pdf->Cell(60,10,$mostrar['TIPO_PLATILLO'],1,0,'c',0);
    $pdf->Cell(40,10,$mostrar['PRECIO'],1,0,'c',0);
    $pdf->Ln(10);
   

}
 


$pdf->Output();
?>