<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Catagory Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $editcatid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $catname=$_POST['CatName'];
                       if(empty($catname)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update catagory                        
                        set
                        CatName='$catname'				
                        WHERE id = $editcatid";
                       
                        $updateCat=$db->update($updatequery);
                        if($updateCat){
                          echo "Catagory Update Successful";
                        }else{
                            echo "Catagory Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  catagory where id='$editcatid'";
				    $getcat = $db->catselect($editquery);
					 if($getcat){
						 
				         while($result=$getcat->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Catagory Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['CatName'] ;?>" name="CatName" />
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