<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
	  <?php
	  $db=new database();
	  if(isset($_GET['deletesocial'])){
		$deletesocial=$_GET['deletesocial'];
		$deletequery="delete from social where id= $deletesocial";
		$socialdelete=$db->delete($deletequery);
		if($socialdelete){
			echo"Sociallist Delete Succesfully";
		}else{
			echo"Sociallist Delete Not Succesfull";

		}
	  }
	 
	 
	 ?>
	
	
	
            <div class="box round first grid">
                <h2>Social List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">Social Link Name</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select Social start--> 
					
					<?php
                       $db=new database();
					      $query="Select * from social";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['SocialLinkName']; ?></td>						
							<td><a href="editsocial.php?editid=<?php echo $result['id']; ?>">Edit</a> ||
							 <a onclick="alert('Are You Sure To Delete ?')" href ="?deletesocial=<?php echo $result['id']; ?>">Delete</a>||
							 <a href="pdfsocial.php?pdfsocialid=<?php echo $result['id'];?>">PDF</a>
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