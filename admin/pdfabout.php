<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 

$db=new database();
if(isset($_GET['pdfaboutid'])){

 $pdfid= $_GET['pdfaboutid'];

 $pdfquery="Select * from about
 where about.id='$pdfid'";

 $getnews=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();
 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(30,10,'CatName','1','0','C');
 $pdf->Cell(40,10,'subcatname','1','0','C');
 $pdf->Cell(40,10,'newsDate','1','1','C');

 $pdf->SetFont('Arial','',10);
 while ($result=mysqli_fetch_assoc($getnews)){
    $pdf->Cell(30,10,$result['id'],'1','0','C');
    $pdf->Cell(30,10,$result['CatName'],'1','0','C');
    $pdf->Cell(40,10,$result['subcatname'],'1','0','C');
    $pdf->Cell(40,10,$result['newsDate'],'1','1','C');

 }







 $pdf->Output();
 
 
}




?>
