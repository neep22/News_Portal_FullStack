<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New News</h2>
                <div class="block"> 
				<!--add news php start -->
				
				<?php 
				   $db=new database();
				   
				   
				   if(isset($_POST['submit'])){
					
					$title=$_POST['title'];
					$catid=$_POST['catid'];
					$subCatId=$_POST['subCatid'];
					$details=$_POST['details'];
					$newsDate=$_POST['newsDate'];
					 $permited  = array('png','jpg','webp');//permission file
						   $image=$_FILES['image']['name'];
						   $image_size = $_FILES['image']['size'];
						   $tempimage=$_FILES['image']['tmp_name'];
						   $div=explode('.', $image);//after . validation
						   $file_ext=strtolower(end($div));
						   $unique_image =substr(md5(time()), 0, 10).'.'.$file_ext;//rendom unique name define for same file name
						             
						   $mainimage="upload/".$unique_image;
						   if(empty($title)||empty($catid)||empty($subCatId)||empty($details)||empty($newsDate)||empty($mainimage)){
							   echo "field must not be empty";
						   }elseif($image_size>1048567){
							   
							   echo "logo Size should be less then 1MB!";
						   }elseif(in_array($file_ext, $permited) === false){
							   echo "You can upload only:"
						           .implode(', ', $permited)."";
							   
							   
						   }else{
							   
							   move_uploaded_file($tempimage,$mainimage);
							   $news_insert="insert into news(title,catid,subCatid,image,details,newsDate)
							         values('$title','$catid','$subCatId','$mainimage','$details','$newsDate')";
									 
					                $news_insert_row=$db->catinsert($news_insert);
									if($news_insert_row){
										echo "news insert success";
									}else{
										echo "news insert not success";
									}
					
						   }
				   }
				
				
				
				
				?>
				
				
				


				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                     <tr>

                            <td>
							     <label>Title :</label>
                                <input type="text" name="title" />
							</td>
                        </tr> 
                       
					   
					   <tr>
						 <td>
						 <label>Catagory: <label/>
						 <select name="catid">
								
								 <option value="">Select Categories</option>
								 <?php 
								    
									$catquery="select * from catagory";
									 $cat_read=$db->catselect($catquery);
									 if($cat_read){
								       while($cat_result=$cat_read->fetch_assoc()){
								 
								 
								 ?>
								 
								 
								 
								 <option value="<?php echo $cat_result['id'];?>"><?php echo $cat_result['CatName'];?></option>
								 
									 <?php }}?>
								
								  
								
								
								
								</select>
						 
						 </td>
						
						
						</tr>					


					   
                     
                
                   
                   
                       

                        <tr>
						 <td>
						 
                          <label>Sub Catagory:<label/> 
						 <select name="subCatid">
								
								 <option value="">Select  Subcategories</option>
								 <?php 
								    
									$subcatquery="select * from  subcategories ";
									 $subcat_read=$db->subcatselect($subcatquery);
									 if($subcat_read){
								       while($subcat_result=$subcat_read->fetch_assoc()){
								 
								 
								 ?>
								 
								 
								 
								 <option value="<?php echo $subcat_result['id'];?>"><?php echo $subcat_result['subcatname'];?></option>
								 
									 <?php }}?>
								
								  
							
							 </select>	
								
						 
						 </td>
						
						
						</tr>
	                 
					 <tr>

                            <td>
                                <label>Images:<label/>
								<input type="file" name="image" />
							</td>
                        </tr>

								
                       
                     <tr>

                            <td>
                                <label>Details:<label/>
							   <textarea name="details"></textarea>
							</td>
                        </tr>


                      <tr>

                            <td>
                                <label>Date And Time:<label/>
							   <input type="date" name="newsDate"/>
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