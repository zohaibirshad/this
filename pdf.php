<?php
//echo "<meta http-equiv=\"refresh\" content=\"0;url=http://www.train2invest.net/useradmin/atest_Khan.php\">";
require('fpdf/fpdf.php');

//create a FPDF object
$pdf=new FPDF();

//set font for the entire document
$pdf->SetFont('times','',12);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P');
// $pdf->SetFillColor(50,60,100);
$pdf->Rect(0, 0, 223, 342, 'F');
// $pdf->SetDisplayMode(real,'default');

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,60);
$pdf->SetFontSize(12);
$pdf->Write(5,'Dear Ms.XYX');

//Output the document
$filename="test.pdf";
$pdf->Output($filename,'F');
?>