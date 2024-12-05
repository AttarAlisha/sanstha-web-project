<?php
require("fpdf/fpdf/fpdf.php");
include("connection.php");

$pdf=new FPDF();

$pdf->AddPage("L");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25,10,"Customer reviews",0,1,"C");
$query1="SELECT name, email, subject ,message FROM contacts";
$res=mysqli_query($con,$query1);
$pdf->Cell(40,10,"Name",1,0,"L");
$pdf->Cell(50,10,"E-mail",1,0,"L");
$pdf->Cell(70,10,"Subject",1,0,"L");
$pdf->Cell(70,10,"Message",1,1,"L");
$pdf->SetFont('Arial','',12);

while($rs=mysqli_fetch_assoc($res))
{
$pdf->Cell(40,10,$rs['name'],1,0,"L");
$pdf->Cell(50,10,$rs['email'],1,0,"L");
$pdf->Cell(70,10,$rs['subject'],1,0,"L");
$pdf->Cell(70,10,$rs['message'],1,0,"L");

$pdf->Cell(25,10,"",0,1);
}

mysqli_close($con);



$pdf->Output();
?>