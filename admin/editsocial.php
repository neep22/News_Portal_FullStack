<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Social Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $editsocialid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $SocialLinkName=$_POST['SocialLinkName'];
                       if(empty($SocialLinkName)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update social                        
                        set
                        SocialLinkName='$SocialLinkName'				
                        WHERE id = $editsocialid";
                        $updatesocial=$db->update($updatequery);
                        if($updatesocial){
                          echo "Social Link Name Update Successful";
                        }else{
                            echo "Social Link Name Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  social where id='$editsocialid'";
				    $getsocial = $db->catselect($editquery);
					 if($getsocial){
						 
				         while($result=$getsocial->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Social Link Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['SocialLinkName'] ;?>" name="SocialLinkName" />
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