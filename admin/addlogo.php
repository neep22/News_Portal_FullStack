<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add Logo</h2>
                <div class="block"> 
				<!--add logo start -->
				
				<?php
                  $db=new database();
				  if(isset($_POST['submit'])){
					
					$permited= array('png','jpg','webp');//permission
                    $logo=$_FILES['logo']['name'];
					$logo_size=$_FILES['logo']['size'];
					$templogo=$_FILES['logo']['tmp_name'];
					$div=explode('.',$logo);// dot er ager nam gula
					$file_ext=strtolower(end($div));// dot er porer extension
                    $unique_image=substr(md5(time()),0,10).'.'.$file_ext;	//random unique name define in same image				
					$mainlogo="upload/".$unique_image;
					
					
					if(empty($mainlogo)){
						echo"field must not be empty";
					}elseif($logo_size>1048567820){
						echo "logo size should be less than 1 mb";
						
					}elseif(in_array($file_ext,$permited) == false){
						echo"You can upload only:"
						.implode(',',$permited)."";
					}
					
					
					
					
					
					else{
						move_uploaded_file($templogo,$mainlogo);
						$insert="insert into logo (logo) values('$mainlogo')";
						$insert_rows=$db->catinsert($insert);
				        
						if($insert_rows){
							echo "logo insert success";
						}else{
							echo "logo  insert not success";
						}
						
					}
				 }                     

				?>

				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>

                            <td>
							     <label>Logo:</label>
                                <input type="file" name="logo" />
								
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