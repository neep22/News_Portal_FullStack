<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>

<div class="grid_10">
	
  
	
	
	
            <div class="box round first grid">
                <h2>Sub Category List</h2>
				<a href="pdfsubcatagory.php">PDF/Print</a>	
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="30%">Serial</th>
							<th width="25%">Cat Name</th>
							<th width="25%">Sub Cat Name</th>
			                <th width="20%">Action</th>
						
							
						</tr>
					</thead>
					<!-- Select category start--> 
					
					<?php
                       
					$db= new database(); 
					$subquery="select catagory.CatName, subcategories.*
					from catagory
					INNER JOIN  subcategories  ON catagory.id = subcategories.cat_id
					order by catagory.CatName";
					$subread=$db->catselect($subquery);
					if($subread){
						$i=0;
						
						while($result=$subread->fetch_assoc()){
							$i++;
							
					

				


					?>
					
				  
					
			
					 				 				 
						<tr class="odd gradeX">
						<td><?php echo $i;?></td>
							<td><?php echo $result['CatName'];?></td>
                            <td><?php echo $result['subcatname'];?></td>								
							<td><a href="editsubcat.php?editsubid=<?php echo $result['id'];?>"> Edit</a> || 
							<a onclick="alert('Are you sure to delete')" href>Delete</a>||
							
						</td>
							 
					<?php }} ?>
	
					 
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