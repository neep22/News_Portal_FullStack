<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
<?php
	  $db=new database();
	  if(isset($_GET['deleteproduct'])){
		$deleteproduct=$_GET['deleteproduct'];
		$deletequery="delete from product where id= $deleteproduct";
		$productdelete=$db->delete($deletequery);
		if($productdelete){
			echo"Sociallist Delete Succesfully";
		}else{
			echo"Sociallist Delete Not Succesfull";

		}
	  }
	 ?>
	
	 
	  
	
	
	
            <div class="box round first grid">
                <h2>Product List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="20%">Serial</th>
							<th width="20%">Product Name</th>
							<th width="20%">Product Model</th>
							<th width="20%">Price</th>
							<th width="20%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select Post start--> 
					
					<?php
                       
					      $query="Select * from product";
						  $Catread=$db->catselect($query);
						  if($Catread){
							  $i=0;
							  
							  while( $result=$Catread->fetch_assoc()){
								  $i++;
						 




					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['ProductName']; ?></td>
							<td><?php echo $result['ProductModel']; ?></td>		
							<td><?php echo $result['Price']; ?></td>		
							<td><a href="editproduct.php?editid=<?php echo $result['id']; ?>">Edit</a> || 
							<a onclick="alert('Are You Sure To Delete ?')" href ="?deleteproduct=<?php echo $result['id']; ?>">Delete</a>||
							<a href="pdfproduct.php?pdfproductid=<?php echo $result['id'];?>">PDF</a>
						</td>
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