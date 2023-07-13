<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 

$db=new database();
if(isset($_GET['pdfsocialid'])){

 $pdfid= $_GET['pdfsocialid'];

 $pdfquery="Select * from social
 where social.id='$pdfid'";

 $getsocial=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();
 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(50,10,'SocialLinkName','1','1','C');


 $pdf->SetFont('Arial','',10);
 while ($result=mysqli_fetch_assoc($getsocial)){
    $pdf->Cell(30,10,$result['id'],'1','0','C');
    $pdf->Cell(50,10,$result['SocialLinkName'],'1','1','C');
    
 }







 $pdf->Output();
 
 
}




?>
