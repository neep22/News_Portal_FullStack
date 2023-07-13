<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 

$db=new database();
if(isset($_GET['pdfproductid'])){

 $pdfid= $_GET['pdfproductid'];

 $pdfquery="Select * from product
 where product.id='$pdfid'";
 $getnews=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();
 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(50,10,'ProductName','1','0','C');
 $pdf->Cell(50,10,'ProductModel','1','0','C');
 $pdf->Cell(40,10,'Price','1','1','C');

 $pdf->SetFont('Arial','',10);
 while ($result=mysqli_fetch_assoc($getnews)){
    $pdf->Cell(30,10,$result['id'],'1','0','C');
    $pdf->Cell(50,10,$result['ProductName'],'1','0','C');
    $pdf->Cell(50,10,$result['ProductModel'],'1','0','C');
    $pdf->Cell(40,10,$result['Price'],'1','1','C');

 }







 $pdf->Output();
 
 
}




?>
