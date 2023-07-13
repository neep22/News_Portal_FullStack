<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
	 
<?php
	  $db=new database();
	  if(isset($_GET['deleteslogan'])){
		$deleteslogan=$_GET['deleteslogan'];
		$deletequery="delete from slogan where id= $deleteslogan";
		$slogandelete=$db->delete($deletequery);
		if($slogandelete){
			echo"Slogan Delete Succesfully";
		}else{
			echo"Slogan Delete Not Succesfull";

		}
	  } 
	
	?>
	
            <div class="box round first grid">
                <h2>Title And Slogan List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">Title And Slogan Name</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select Title And Slogan start--> 
					
					<?php
                     
					      $query="Select * from slogan";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['title_slogan']; ?></td>						
							<td><a href="updatetitleslogan.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deleteslogan=<?php echo $result['id']; ?>">Delete</a></td>
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