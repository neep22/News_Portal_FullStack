<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
          <div class="box round first grid">
                <h2>Footer Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $editid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $Address=$_POST['Address'];
                       $Phone=$_POST['Phone'];
                       $Email=$_POST['Email'];

                       if(empty($Address) || empty($Phone) || empty($Email)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update footer                        
                        set
                        Address='$Address',	
                        Phone='$Phone',
                        Email='$Email'

                        WHERE id = $editid";
                        $updatefooter=$db->update($updatequery);
                        if($updatefooter){
                          echo "Footer Update Successful";
                        }else{
                            echo "Footer Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  footer where id='$editid'";
				    $getfooter = $db->catselect($editquery);
					 if($getfooter){
						 
				         while($result=$getfooter->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Address:</label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['Address'] ;?>" name="Address" />
                                
                            </td>
                        </tr>
                       
                        <tr>
						      
                            <td>
                                <label>Phone: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['Phone'] ;?>" name="Phone" />
                      
                          </td>
                          </tr>

                          <tr>
						      
                            <td>
                                <label>Email: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['Email'] ;?>" name="Email" />
                      
                          </td>
                          </tr>
						
                        
                        
                          <?php }}?>
                        
						
						
						<tr>
                            <td></td>
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