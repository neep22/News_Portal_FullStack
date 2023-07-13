<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
<?php
	  $db=new database();
	  if(isset($_GET['deletefooter'])){
		$deletefooter=$_GET['deletefooter'];
		$deletequery="delete from footer where id= $deletefooter";
		$footerdelete=$db->delete($deletequery);
		if($footerdelete){
			echo"Footer Delete Succesfully";
		}else{
			echo"Footer Delete Not Succesfull";

		}
	  }
	 ?>
	
	
	
	
            





<div class="box round first grid">
                <h2>Copyright List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="10%">Serial</th>
							<th width="30%">Address</th>
							<th width="20%">Phone</th>
							<th width="20%">Email</th>
							<th width="20%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select Copyright start--> 
					
					<?php
                       $db=new database();
					      $query="Select * from footer";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['Address']; ?></td>
							<td><?php echo $result['Phone']; ?></td>
							<td><?php echo $result['Email']; ?></td>	
												
							<td><a href="editcopyright.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deletefooter=<?php echo $result['id']; ?>">Delete</a></td>
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