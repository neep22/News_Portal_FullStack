<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 

$db=new database();
if(isset($_GET['pdfnewsid'])){

 $pdfid= $_GET['pdfnewsid'];

 $pdfquery="Select news.*,catagory.*,subcategories.*
 from news
 inner join catagory on news.catid =catagory.id 
 inner join subcategories on news.subCatid =subcategories.id 
 where news.id='$pdfid'";
 $getnews=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();
 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(30,10,'CatName','1','0','C');
 $pdf->Cell(40,10,'subcatname','1','0','C');
 $pdf->Cell(40,10,'newsDate','1','0','C');
 $pdf->Cell(40,10,'image','1','1','C');


 $pdf->SetFont('Arial','',10);
 while ($result=mysqli_fetch_assoc($getnews)){
    $pdf->Cell(30,10,$result['id'],'1','0','C');
    $pdf->Cell(30,10,$result['CatName'],'1','0','C');
    $pdf->Cell(40,10,$result['subcatname'],'1','0','C');
    $pdf->Cell(40,10,$result['newsDate'],'1','0','C');
    $pdf->Cell(40,10,$result['image'],'1','1','C');

 }







 $pdf->Output();
 
 
}




?>
