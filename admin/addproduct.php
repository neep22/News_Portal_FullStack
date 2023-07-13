<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Product</h2>
                <div class="block"> 
				<!--add product php start -->
				
				<?php
				$db=new database();
				if(isset($_POST['submit'])){
					
					$ProductName=$_POST['ProductName'];
					$ProductModel=$_POST['ProductModel'];
					$Price=$_POST['Price'];

                    
					if(empty($ProductName) || empty($ProductModel) || empty($Price)){
						echo "fill must not be empty";
					}else{
						
						$Addressinsert="INSERT INTO  product(ProductName,ProductModel,Price) VALUES('$ProductName','$ProductModel','$Price')";
                        $Addressinsert_rows=$db->socialinsert($Addressinsert);
                        if($Addressinsert_rows){
							echo "product  insert success";
						}else{
							echo "product`insert not success";

					}
					
				}

				}



				?>
				
				
			
				
		
				
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                         <tr>

                            <td>
                           <label>Product Name:</label>
						    <input type="text" name="ProductName"/>
                            </td>
						 </tr>
							
						<tr>
							
							<td>
							<label>Product Model:</label>
                            <input type="text" name="ProductModel"/> 
                            </td>
							</tr>
							
						<tr>
                            <td>
							<label>Price:</label>
                            <input type="text" name="Price"/>
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