<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Sub Catagory</h2>
                <div class="block"> 
				<!--add category php start -->
				
				<?php
				
                 $db=new database();
				if(isset($_POST['submit'])){
					
					$subcatname=$_POST['subcatname'];
					$cat_id=$_POST['cat_id'];
					
					if(empty($subcatname)|| empty($cat_id)){
						echo "fill must not be empty";
					}else{
						
						$insert="INSERT INTO  subcategories (cat_id,subcatname) VALUES('$cat_id','$subcatname')";
						$insert_rows=$db->catinsert($insert);
						if($insert_rows){
							echo "Subcat insert success";
						}else{
							echo "Subcat  insert not success";
						
					}
					
				}
			}



				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							     <label>Sub Catagories:</label>
                                <input type="text" name="subcatname" />
								
								<tr>
								<td>
							    <label> Catagory:</label>
							    <select name = "cat_id">
								<option value ="">Select Catagories</option>
								<?php
								
								
							    $catquery="select * from catagory";
								$cat_read=$db->catselect($catquery);
								if($cat_read){
									while($cat_result=$cat_read->fetch_assoc()){
								
								
								
								
								
								
								
								?>
								
								
								
								
								<option value="<?php echo $cat_result['id'];?>"><?php echo $cat_result['CatName'];?></option>
								<?php } };?>
								</select>
								</td>
								</tr>
								
								
								<tr>
								<td>
								
								<input type="submit" name="submit" Value="Save" />
								</tr>
								</td>
                            </td>
							<td>
                                
                            </td>
                        </tr>
                      
                    </table>
                    </form>
                </div>
            </div>
  </div>
		 <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>






<?php include 'inc/footer.php' ;?>