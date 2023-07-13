<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
<?php
	  $db=new database();
	  if(isset($_GET['deleteabout'])){
		$deleteabout=$_GET['deleteabout'];
		$deletequery="delete from about where id= $deleteabout";
		$aboutdelete=$db->delete($deletequery);
		if($aboutdelete){
			echo"About Delete Succesfully";
		}else{
			echo"About Delete Not Succesfull";

		}
	  }
	 
	 
	 ?>
	
	
	
	
            <div class="box round first grid">
                <h2>About List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">Description</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select About start--> 
					
					<?php
                       $db=new database();
					      $query="Select * from about";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['description']; ?></td>						
							<td><a href="editabout.php?editid=<?php echo $result['id']; ?>">Edit</a>||
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deleteabout=<?php echo $result['id']; ?>">Delete</a>
						     <a href="pdfnews.php?pdfaboutid=<?php echo $newsResult['id'];?>">PDF</a>
						</td>
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