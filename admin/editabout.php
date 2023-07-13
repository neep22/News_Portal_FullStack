<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Abput Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $Editdescription= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $description=$_POST['description'];
                       if(empty($description)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update about                        
                        set
                        description='$description'				
                        WHERE id = $Editdescription";
                        $updateabout=$db->update($updatequery);
                        if($updateabout){
                          echo "About Update Successful";
                        }else{
                            echo "About Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  about where id='$Editdescription'";
				    $getabout = $db->catselect($editquery);
					 if($getabout){
						 
				         while($result=$getabout->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>About Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['description'] ;?>" name="description" />
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