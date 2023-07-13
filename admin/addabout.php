<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add About</h2>
                <div class="block"> 
				<!--add About php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$description=$_POST['description'];

                    
					if(empty($description)){
						echo "fill must not be empty";
					}else{
						
						$insert="INSERT INTO about(description) VALUES('$description')";
						$insert_rows=$db->socialinsert($insert);
						if($insert_rows){
							echo "about insert success";
						}else{
							echo "about  insert not success";
						}
					}
					
				}




				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							     <label>About:</label>
                                <input type="text" name="description"/>
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


