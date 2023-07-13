<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Social</h2>
                <div class="block"> 
				<!--add category php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$socialname=$_POST['SocialLinkName'];

                    
					if(empty($socialname)){
						echo "fill must not be empty";
					}else{
						
						$insert="INSERT INTO social(SocialLinkName) VALUES('$socialname')";
						$insert_rows=$db->socialinsert($insert);
						if($insert_rows){
							echo "Social Link insert success";
						}else{
							echo "Social  insert not success";
						}
					}
					
				}




				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							    <label>Social Link:</label>
                                <input type="text" name="SocialLinkName"/>
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