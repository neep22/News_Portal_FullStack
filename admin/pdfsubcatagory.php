<?php
include 'lib/database.php';
include 'FPDF/fpdf185/fpdf.php'

?>

<?php 
$db=new database();




 $pdfquery="select catagory.CatName, subcategories.*
 from catagory
 INNER JOIN  subcategories  ON catagory.id = subcategories.cat_id
 order by catagory.CatName";

 $getsubacatagory=$db->catselect($pdfquery);
 $pdf= new FPDF('p','mm','a4');
 $pdf->SetFont('Arial','B',16);
 $pdf->Addpage();

 $pdf->Cell(30,10,'Serial','1','0','C');
 $pdf->Cell(60,10,'CatName','1','0','C');
 $pdf->Cell(40,10,'subcatname','1','1','C');
 if ($getsubacatagory){

 $i=0;

 while ($result=mysqli_fetch_assoc($getsubacatagory)){
   $i++;

    $pdf->Cell(30,10,$i,'1','0','C');
    $pdf->Cell(60,10,$result['CatName'],'1','0','C');
    $pdf->Cell(40,10,$result['subcatname'],'1','1','C');


 }







 $pdf->Output();
 
 



 }

?>
