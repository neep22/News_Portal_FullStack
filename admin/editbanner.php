<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Banner</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editbannerid'])){
			 
                        $editbannerid= $_GET['editbannerid'];
		           }
			  
		  
		      
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){



                    $permited= array('png','jpg','webp');
                    $banner=$_FILES['banner']['name'];
                    $banner_size=$_FILES['banner']['size'];
                    $temp_banner=$_FILES['banner']['tmp_name'];
                    $div=explode('.', $banner);
                    $file_ext= strtolower(end($div));
                    $unique= substr(md5(time()), 0, 10).'.'.$file_ext;
                    $mainbanner="upload/".$unique;
                    
					if(empty($mainbanner)){
						echo "field must not be empty";
					}elseif( $banner_size > 10485678){
                        echo "Banner size should be 1MB";

                    }elseif(in_array($file_ext, $permited) === false){
                        echo "You can upload only:"
                            .implode (' , ', $permited)."";
                    }
                    
					else{
                        move_uploaded_file($temp_banner,$mainbanner);
                        $updatequery="update banner
                        set
                        banner='$mainbanner'
                        where id ='$editbannerid'
                        ";
                        
                        
                        $updatebanner=$db->update($updatequery);
                        if($updatebanner){
                            echo"Banner update success";
                        }else{
                            echo"Banner update not success";
                        }
                               
                    }
                }

               
                 ?>
                     
                 

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select * from  banner where id='$editbannerid'";
				    $getbanner = $db->catselect($editquery);
					 if($getbanner){
						 
				         while($getresult=$getbanner->fetch_assoc()){
				     ?>
                       
             
                
                   
                       
                       <tr>
                            <td>
                                <label>Banner</label>
                            </td>

                            <td>
                            <img width ="100px" height="100px" src="<?php echo $getresult['banner'];?>"/>
                         </br>
                         </br>
                            <input type="file" name="banner"/>
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