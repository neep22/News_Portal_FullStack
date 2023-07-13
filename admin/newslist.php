<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
<?php
	  $db=new database();
	  if(isset($_GET['deletenews'])){
		$deletenews=$_GET['deletenews'];
		$query="delete from news where id= $deletenews";
		$newsdelete=$db->delete($query);
		if($newsdelete){
			echo"News Delete Succesfully";
		}else{
			echo"News Delete Not Succesfull";

		}
	  }
	 
	 
	 ?>
	  
	
	
	
            <div class="box round first grid">
                <h2>News List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">Serial</th>
							<th width="10%">Title</th>
							<th width="15%">Catagory Name</th>
							<th width="15%">SubCatagory Name</th>
							<th width="15%">Images</th>
							<th width="20%">Details</th>
							<th width="10%">Date</th>
							<th width="20%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select Newslist start--> 
					<?php
					
					$newsquery="Select news.*,catagory.CatName,subcategories.subcatname
					 from news
					 inner join catagory on news.catid =catagory.id 
					 inner join subcategories on news.subCatid =subcategories.id 
					 order by news.title";
					$newsread=$db->catselect($newsquery);
					if($newsread){
						$i=0;
						while($newsResult=$newsread->fetch_assoc()){
							$i++;
						
					
					
					
					

					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $newsResult['title']; ?></td>
							<td><?php echo $newsResult['CatName']; ?></td>
							<td><?php echo $newsResult['subcatname']; ?></td>
							<td><img width="100px" height="100px" src ="<?php echo $newsResult['image']; ?>"/></td>
						    <td><?php echo $newsResult['details']; ?></td>
							<td><?php echo $newsResult['newsDate']; ?></td>
							
							<td><a href="editnews.php?editid=<?php echo $newsResult['id'];?>">Edit</a>

                             <?php
							 if($_SESSION['usertype']=='admin'){
							 ?>
							||
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deletenews=<?php echo $newsResult['id']; ?>">Delete</a>
							<a href="pdfnews.php?pdfnewsid=<?php echo $newsResult['id'];?>">PDF</a>
						    </td>
						    
							 <?php }?>
							 
						        </tr>
							  <?php }}?>
						
	
					
					</tbody>
					
					
					<!-- Select post end-->
				</table>
	
               </div>
            </div>
        



	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>

<?php include 'inc/footer.php' ;?>