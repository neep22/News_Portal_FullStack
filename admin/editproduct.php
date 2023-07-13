<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Product Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $editproductid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                       $ProductName=$_POST['ProductName'];
                       $ProductModel=$_POST['ProductModel'];
                       $Price=$_POST['Price'];

                       if(empty($ProductName) || empty($ProductModel) || empty($Price)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update product                        
                        set
                        ProductName='$ProductName',	
                        ProductModel='$ProductModel',
                        Price='$Price'

                        WHERE id = $editproductid";
                        $updateproduct=$db->update($updatequery);
                        if($updateproduct){
                          echo "Product Update Successful";
                        }else{
                            echo "Product Update Not Successful";
                        }
                         
                       }
                    }
                 
                 
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  product where id='$editproductid'";
				    $getproduct = $db->catselect($editquery);
					 if($getproduct){
						 
				         while($result=$getproduct->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Product Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['ProductName'] ;?>" name="ProductName" />
                                
                            </td>
                        </tr>
                       
                        <tr>
						      
                            <td>
                                <label>Product Model: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['ProductModel'] ;?>" name="ProductModel" />
                      
                          </td>
                          </tr>

                          <tr>
						      
                            <td>
                                <label>Product Price: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['Price'] ;?>" name="Price" />
                      
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