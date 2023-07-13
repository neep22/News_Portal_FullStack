<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
<?php
  $db=new database();
  if(isset($_GET['deletebanner'])){
	$deletebanner=$_GET['deletebanner'];
	$deletequery="delete from banner where id= $deletebanner";
	$bannerdelete=$db->delete($deletequery);
	if($bannerdelete){
		echo"Banner Delete Succesfully";
	}else{
		echo"Banner Delete Not Succesfull";

	}
  }
 
	 
	 ?>
	
	
	
	
            <div class="box round first grid">
                <h2>Banner List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">BANNER</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select banner start--> 
					
					<?php
                       
					      $query="Select * from banner";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
						 <td><img width="200px" height="200px" src ="<?php echo $result['banner']; ?>"/></td>	
						 			
						 <td><a href="editbanner.php?editbannerid=<?php echo $result['id']; ?>">Edit</a> || 
						 <a onclick="alert('Are You Sure To Delete ?')" href ="?deletebanner=<?php echo $result['id']; ?>">Delete</a></td>
						
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

