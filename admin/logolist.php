<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
<?php
	   $db=new database();
	  if(isset($_GET['deletelogo'])){
		$deletelogo=$_GET['deletelogo'];
		$deletequery="delete from logo where id= $deletelogo";
		$logodelete=$db->delete($deletequery);
		if($logodelete){
			echo"Logo Delete Succesfully";
		}else{
			echo"Logo Delete Not Succesfull";

		}
	  }
	 
	 
	 ?>
	
	
	
	
            <div class="box round first grid">
                <h2>Logo List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">LOGO</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select logo start--> 
					
					<?php
                       
					      $query="Select * from logo";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><img width="200px" height="200px" src ="<?php echo $result['logo']; ?>"/></td>
												
							<td><a href="editlogo.php?editlogoid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deletelogo=<?php echo $result['id']; ?>">Delete</a></td>
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