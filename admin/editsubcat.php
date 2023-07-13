<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Subcatagory</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editsubid'])){
			 
			         $editsubid= $_GET['editsubid'];
                    
		           }
			  
		  
		  
		        ?>

			 <?php 
                 
             if(isset($_POST['submit'])){
            
            $catname=$_POST['cat_id'];
            $subcatname=$_POST['subcatname'];
            if(empty($catname)||empty($subcatname)){
                echo "field must not be empty";
            }else{
            $updatequery=" update subcategories                        
             set
             cat_id='$catname',	
             subcatname='$subcatname'			
             WHERE id = $editsubid";
            
             $updateCat=$db->update($updatequery);
             if($updateCat){
               echo "SubCatagory Update Successful";
             }else{
                 echo "SubCatagory Update Not Successful";
             }
              
            }
         }
      
      
      
      ?>
          


                
                
               
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="SELECT catagory.*,subcategories.*
                                   FROM catagory
                                   INNER JOIN subcategories ON catagory.id=subcategories.cat_id
								     where subcategories.id='$editsubid'
                                    ";
									$getsubcat = $db->catselect($editquery);
					              if($getsubcat){
						 
				               while($result=$getsubcat->fetch_assoc()){
					
                            ?>
			
					
           
                
                   
                   
                        <tr>
						      
                            <td>

							   <label>Select Catagory:</label>
                                <select name="cat_id">
                               <?php
                               
                               
                               
                               $catquery="select * from catagory";
								$cat_read=$db->catselect($catquery);
								if($cat_read){
									while($cat_result=$cat_read->fetch_assoc()){
								
							?>
								
							 <option value="<?php echo $cat_result['id'];?>"><?php echo $cat_result['CatName'];?>
                                </option> 

        
								<?php } };?>
								
								</select>
							 
                               
                            </td>
						</tr>
							<tr>
							<td>
							subcatagory:<input type="text" name="subcatname" value=" <?php echo $result['subcatname'];?>"/>
                            </td>
							
							</td>
                           </tr>
						 <?php }};?>
                        
						
						
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