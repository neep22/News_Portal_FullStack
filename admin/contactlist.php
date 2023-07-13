<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
<div class="grid_10">
	
<!-- Delete contact start--> 
    <?php
    $db=new database();
      if(isset($_GET['deletecontact'])){
      $deletecontact=$_GET['deletecontact'];
      $deletequery="delete from contact where id= $deletecontact";
      $contactdelete=$db->delete($deletequery);
      if($socialdelete){
          echo"contactlist Delete Succesfully";
      }else{
          echo"Contactlist Delete Not Succesfull";

      }
    }
   
   ?>
  <!-- Delete contact End-->
	
	
	
            <div class="box round first grid">
                <h2>Contact List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="10%">Serial</th>
							<th width="10%">First Name</th>
                            <th width="10%">Last Name</th>
                            <th width="10%">Email</th>
                            <th width="10%">Phone Number</th>
                            <th width="20%">Address</th>
                            <th width="20%">Message</th>
							<th width="10%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select contact start--> 
					
					<?php
                       $db=new database();
					      $query="Select * from contact order by id desc";
						  $contactread=$db->catselect($query);
						  if( $contactread){
							  $i=0;
							  
							  while( $contactresult= $contactread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $contactresult['first_name'];?></td>
                            <td><?php echo $contactresult['last_name'];?></td>
                            <td><?php echo $contactresult['Email'];?></td>
                            <td><?php echo $contactresult['Phone_Number'];?></td>
                            <td><?php echo $contactresult['Address'];?></td>
                            <td><?php echo $contactresult['Messege'];?></td>						
							<td><a href="editcontact.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
                            <a onclick="alert('Are You Sure To Delete ?')" href ="?deletecontact=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
                        <?php }}?>
						
	
					 
					</tbody>
					
					
					<!-- Select contact end-->
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