<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
<?php
	  $db=new database();
	  if(isset($_GET['deleteuser'])){
		$deleteuser=$_GET['deleteuser'];
		$deletequery="delete from users where id= $deleteuser";
		$userdelete=$db->delete($deletequery);
		if($userdelete){
			echo"userlist Delete Succesfully";
		}else{
			echo"Userkist Delete Not Succesfull";

		}
	  }
	 ?>
	
	 
	  
	
	
	
            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">Serial</th>
							<th width="10%">First Name</th>
							<th width="10%">Last Name</th>
							<th width="10%">Username</th>
                            <th width="10%">Password</th>
							<th width="10%">Email</th>
							<th width="10%">Mobile</th>
							<th width="10%">Gender</th>
                            <th width="5%">Terms</th>
							<th width="10%">Usertype</th>
							<th width="10%">Action</th>


						
							
						</tr>
					</thead>
					<!-- Select Users start--> 
					
					<?php
                       
					      $query="Select * from users";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['fname']; ?></td>
							<td><?php echo $result['lname']; ?></td>		
							<td><?php echo $result['username']; ?></td>
                            <td><?php echo $result['password']; ?></td>
							<td><?php echo $result['email']; ?></td>		
							<td><?php echo $result['mobile']; ?></td>
                            <td><?php echo $result['gender']; ?></td>
							<td><?php echo $result['Terms']; ?></td>		
							<td><?php echo $result['usertype']; ?></td>
                            			
                            
                            
							<td><a href="edituser.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deleteuser=<?php echo $result['id']; ?>">Delete</a></td>
							
						</tr>

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