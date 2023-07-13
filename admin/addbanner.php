<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Banner</h2>
                <div class="block"> 
				<!--add banner start -->
				
				<?php
                  $db=new database();
				  if(isset($_POST['submit'])){
					
					$permited= array('png','jpg','webp');//permission
                    $banner=$_FILES['banner']['name'];
					$banner_size=$_FILES['banner']['size'];
					$temp_banner=$_FILES['banner']['tmp_name'];
					$div=explode('.',$banner);// dot er ager nam gula
					$file_ext=strtolower(end($div));// dot er porer extension
                    $unique_image=substr(md5(time()),0,10).'.'.$file_ext;	//random unique name define in same image				
					$main_banner="upload/".$unique_image;
					
					
					if(empty($main_banner)){
						echo"field must not be empty";
					}elseif($banner_size>104856780){
						echo "banner size should be less than 1 mb";
						
					}elseif(in_array($file_ext,$permited) == false){
						echo"You can upload only:"
						.implode(',',$permited)."";
					}
					
					
					
					
					
					else{
						move_uploaded_file($temp_banner,$main_banner);
						$insert="insert into banner(banner) values('$main_banner')";
						$insert_rows=$db->catinsert($insert);
				        
						if($insert_rows){
							echo "banner insert success";
						}else{
							echo "banner  insert not success";
						}
						
					}
				 }                     

				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                        <tr>

                            <td>
							     <label>Banner:</label>
                                <input type="file" name="banner" />
								
                            </td>
							<td>
                                
                           <tr>
						   <td>
						   
						   <input type="submit" name="submit" Value="Save" />
						   </td>
						   </tr>
							
							
							
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