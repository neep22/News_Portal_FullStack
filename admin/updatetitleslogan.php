<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Title and Slogan Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $edittitleid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $titlename=$_POST['title_slogan'];
                       if(empty($titlename)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update slogan                      
                        set
                        title_slogan='$titlename'				
                        WHERE id = $edittitleid";
                        $updatetitle=$db->update($updatequery);
                        if($updatetitle){
                          echo "Title & Slogan Update Successful";
                        }else{
                            echo "Title & Slogan Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  slogan where id='$edittitleid'";
				    $gettitle = $db->catselect($editquery);
					 if($gettitle){
						 
				         while($result=$gettitle->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Title & Slogan Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['title_slogan'] ;?>" name="title_slogan" />
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