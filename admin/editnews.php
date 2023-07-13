<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Edit News</h2>
                <div class="block"> 
				   <!--take reffer id for get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $editid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>


                  <?php
				  
				     if(isset($_POST['submit']) && $_SESSION['usertype']=='admin'){
						 
						$title=$_POST['title'];
						$catid=$_POST['catid'];
						$subCatId= $_POST['subCatId'];
						$details=$_POST['details'];
						$newsDate=$_POST['newsDate'];
						$permited  = array('jpg', 'jpeg', 'png', 'gif','pdf');
				$file_name = $_FILES['image']['name'];
				$file_size = $_FILES['image']['size'];
				$file_temp = $_FILES['image']['tmp_name'];

				$div = explode('.', $file_name);
				$file_ext = strtolower(end($div));
				$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
				$uploaded_image = "upload/".$unique_image;
				
				if ( empty($title) || empty ($catid) || empty($subCatId) || empty( $details) || empty( $newsDate) ||empty($uploaded_image)) {
				 echo "<span class='error'>Field Must Not be Empty ! </span>";
				}
			    if(!empty($file_name)){
				if ($file_size >1048567) {
				 echo "<span class='error'>Image Size should be less then 1MB!
				 </span>";
				} elseif (in_array($file_ext, $permited) === false) {
				 echo "<span class='error'>You can upload only:-"
				 .implode(', ', $permited)."</span>";
				} else{		
				   move_uploaded_file($file_temp, $uploaded_image);
							   
							   $updatequery="
							     update news 
								 
								  set
								 title='$title',
								 catid='$catid',
								 subCatId='$subCatId',
								 image='$uploaded_image',
								 details='$details',
								 newsDate='$newsDate'
								 where id='$editid' ";
								 $upadatenews=$db->update($updatequery);
								 if($upadatenews){
									 echo "news update success";
								 }else{
									 echo "news not updated";
								 }
						   }
						       } else{
									 
									 $updatequery="
							     update news 
								 
								  set
								 title='$title',
								 catid='$catid',
								 subCatId='$subCatId',
								 details='$details',
								 newsDate='$newsDate'
								 where id='$editid' ";
								 $upadatenews=$db->update($updatequery);
								 if($upadatenews){
									 echo "news update success";
								 }else{
									 echo "news not updated";
									 
									 
									 
								 }
							   
							  
						
					 }
					 }
				
                  ?>
                     
	           <?php
				   //select for edit
				    
					$db=new database();
                    $newsquery="Select news.*,catagory.*,subcategories.*
                     from news
                     INNER JOIN catagory on news.catid=catagory.id
                     INNER JOIN subcategories on news.subCatId=subcategories.id
                      where news.id='$editid'";
                     $newsRead=$db->catselect($newsquery);
                     if($newsRead){

                         while($newsResult=$newsRead->fetch_assoc()){
                    
					
			
					
				    
				     ?>
       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
				
                       <tr>
							<td>
							Title:<input type="text" name="title" value="<?php echo $newsResult['title']; ?>"/>
							
							</td>
                        </tr>
             
                
                   
                   
                        <tr>
						      
                            
							
							
                            <td>
							   catname: <select name="catid">
							   
							    
							   
								
								<option value="<?php echo $newsResult['catid']; ?>">
								  <?php echo $newsResult['CatName']; ?>
								
								<option>
								
								 <?php 
								    
									$newsquery="select * from catagory";
									 $news_read=$db->catselect($newsquery);
									 if($news_read){
								       while($Result=$news_read->fetch_assoc()){
								 
								 
								 ?>
								 
								 
								 
								 <option value="<?php echo $Result['id'];?>"><?php echo $Result['CatName'];?></option>
								 
									 <?php }};?>
								
								 
								
								</select>
							 
                               
                            </td>
						   </tr>
						   
						   
						   
							<tr>
							<td>
							   subcatname: <select name="subCatId">
							   
							    
							   
								
								<option value="<?php echo $newsResult['id']; ?>">
								   <?php echo $newsResult['subcatname']; ?>
								
								<option>
								 <?php 
								    
									$newssubcatquery="select * from subcategories";
									 $newssubcat_read=$db->catselect($newssubcatquery);
									 if($newssubcat_read){
								       while($Result=$newssubcat_read->fetch_assoc()){
								 
								 
								 ?>
								 
								 
								 
								 <option value="<?php echo $Result['id'];?>"><?php echo $Result['subcatname'];?></option>
								 
									 <?php }};?>
								
							  
								 
								
								
								
								
								</select>
							
							</td>
                           </tr>
						   
						 <tr>
							<td>
							image:<img width="100px" height="100px" type="text" src="<?php echo $newsResult['image']; ?>"/>
							<input type="file" name="image"/>
							
							</td>
                        </tr>
						
						
						 <tr>
							<td>
							details:<textarea name="details">
							
							 <?php echo $newsResult['details']; ?>
							</textarea>
							
							</td>
                        </tr>
						
						
						 <tr>
							<td>
							date:<input type="text" value="<?php echo $newsResult['newsDate']; ?>" name="newsDate"/>
							
							</td>
                        </tr>
					 <?php }}?>
						
                        
						
						
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