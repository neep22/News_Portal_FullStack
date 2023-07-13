<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 

$db=new database();
if(isset($_GET['pdfcatagoryid'])){

 $pdfid= $_GET['pdfcatagoryid'];

 $pdfquery="Select * from catagory
 where catagory.id='$pdfid'";
 $getnews=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();
 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(30,10,'CatName','1','1','C');

 $pdf->SetFont('Arial','',10);
 while ($result=mysqli_fetch_assoc($getnews)){
    $pdf->Cell(30,10,$result['id'],'1','0','C');
    $pdf->Cell(30,10,$result['CatName'],'1','1','C');


 }







 $pdf->Output();
 
 
}




?>
