<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Categories</h2>
                <div class="block"> 
				<!--add category php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$catname=$_POST['CatName'];
					
					if(empty($catname)){
						echo "fill must not be empty";
					}else{
						
						$insert="INSERT INTO catagory(CatName) VALUES('$catname')";
						$insert_rows=$db->catinsert($insert);
						if($insert_rows){
							echo "cat insert success";
						}else{
							echo "cat  insert not success";
						}
					}
					
				}




				?>
				

				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							     <label>Catagories:</label>
                                <input type="text" name="CatName" />
								<input type="submit" name="submit" Value="Save" />
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