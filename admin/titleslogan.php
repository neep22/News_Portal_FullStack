<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Title And Slogan</h2>
                <div class="block"> 
				<!--add Title And Slogan php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$title=$_POST['titleslogan'];

                    
					if(empty($title)){
						echo "fill must not be empty";
					}else{
						
						$insert="INSERT INTO slogan(title_slogan) VALUES('$title')";
						$insert_rows=$db->socialinsert($insert);
						if($insert_rows){
							echo "Title And Slogan  insert success";
						}else{
							echo "Title And Slogan   insert not success";
						}
					}
					
				}




				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							    <label>Title And Slogan:</label>
                                <input type="text" name="titleslogan"/>
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