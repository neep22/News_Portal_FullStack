<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
<?php

	 
	 
	 ?>
	
	  
	
	
	
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="40%">catName</th>
							<th width="40%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select category start--> 
					
					<?php
                       $db=new database();
					      $query="Select * from catagory";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['CatName']; ?></td>						
							<td><a href="editcat.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deletecat=<?php echo $result['id']; ?>">Delete</a>||
							<a href="pdfcatagory.php?pdfcatagoryid=<?php echo $result['id'];?>">PDF</a>
							</td>
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