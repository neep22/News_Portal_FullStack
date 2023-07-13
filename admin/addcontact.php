<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Contact</h2>
                <div class="block"> 
				<!--add contactt php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$first_name=$_POST['first_name'];
					$last_name=$_POST['last_name'];
					$Email =$_POST['Email'];
                    $Phone_Number=$_POST['Phone_Number']
                    $Address =$_POST['Address']
                    $Messege=$_POST['Messege']
                    
					if(empty($first_name) || empty($last_name) || empty($Email) || empty($Phone_Number) || 
                    
                    empty($Address) || empty($Messege)){
						echo "fill must not be empty";
					}else{
						
						$contactinsert="INSERT INTO  contact(first_name,last_name,Email,Phone_Number,Address,Messege)
                         VALUES('$first_name','$last_name','$Email','$Phone_Number','$Address',$Messege)";


                        $contactinsert_rows=$db->catinsert($contactinsert);
                        if($contactinsert_rows){
							echo "Contact  insert success";
						}else{
							echo "Contact`insert not success";

					}
					
				}

				}



				?>
				
				
			
				
		
				
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                         <tr>

                            <td>
                           <label>First Name:</label>
						    <input type="text" name="first_name"/>
                            </td>
						 </tr>
							
						<tr>
							
							<td>
							<label>Last Name:</label>
                            <input type="text" name="last_name"/> 
                            </td>
							</tr>
							
						<tr>
                            <td>
							<label>Email:</label>
                            <input type="text" name="Email"/>
                            </td>
						    </tr>

                            <tr>

                            <td>
                           <label>Phone Number:</label>
						    <input type="text" name="Phone_Number"/>
                            </td>
						 </tr>
                         <tr>

                            <td>
                           <label>Address:</label>
						    <input type="text" name="Address"/>
                            </td>
						 </tr>
                         td>
                           <label>Messege:</label>
						    <input type="text" name="Messege"/>
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