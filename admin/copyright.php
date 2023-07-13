<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Footer</h2>
                <div class="block"> 
				<!--add Footer php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$Address=$_POST['Address'];
					$Phone=$_POST['Phone'];
					$Email=$_POST['Email'];

                    
					if(empty($Address) || empty($Phone) || empty($Email)){
						echo "fill must not be empty";
					}else{
						
						$Addressinsert="INSERT INTO  footer(Address,Phone,Email ) VALUES('$Address','$Phone','$Email')";
                        $Addressinsert_rows=$db->socialinsert($Addressinsert);
                        if($Addressinsert_rows){
							echo "footer  insert success";
						}else{
							echo "footer  insert not success";

					}
					
				}

				}



				?>
				
				
			
				
		
				
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                         <tr>

                            <td>
                           <label>Address:</label>
						    <input type="text" name="Address"/>
                            </td>
						 </tr>
							
						<tr>
							
							<td>
							<label>Phone:</label>
                            <input type="text" name="Phone"/> 
                            </td>
							</tr>
							
						<tr>
                            <td>
							<label>Email:</label>
                            <input type="email" name="Email"/>
                            </td>
						
						</tr>
							<tr>
							<td>
                            <input type="submit" name="submit" Value="Save" /> 
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