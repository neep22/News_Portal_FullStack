<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Logo</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editlogoid'])){
			 
                        $editlogoid= $_GET['editlogoid'];
		           }
			  
		  
		      
		        ?>


               <?php
                 
                    if(isset($_POST['submit'])){

                    $permited= array('png','jpg','webp');
                    $logo=$_FILES['logo']['name'];
                    $logo_size=$_FILES['logo']['size'];
                    $temp_logo=$_FILES['logo']['tmp_name'];
                    $div=explode('.', $logo);
                    $file_ext= strtolower(end($div));
                    $unique= substr(md5(time()), 0, 10).'.'.$file_ext;
                    $mainlogo="upload/".$unique;
                    
					if(empty($mainlogo)){
						echo "field must not be empty";
					}elseif( $logo_size > 1048567){
                        echo "logo size should be 1MB";

                    }elseif(in_array($file_ext, $permited) === false){
                        echo "You can upload only:"
                            .implode (' , ', $permited)."";
                    }
                    
					else{
                        move_uploaded_file($temp_logo,$mainlogo);
                        $updatequery="update logo
                        set
                        logo='$mainlogo'
                        where id ='$editlogoid'
                        ";
                        
                        
                        $updatelogo=$db->update($updatequery);
                        if($updatelogo){
                            echo"Logo update success";
                        }else{
                            echo"Logo update not success";
                        }
                               
                    }
                 }

                  /*     $logo=$_POST['logo'];
                       if(empty($logo)){
                           echo "field must not be empty";
                       }else{
                       $updatequery=" update logo                         
                        set
                        logo='$logo'				
                        WHERE id = $editlogoid";
                        $updatelogo=$db->logoupdate($updatequery);
                        if($updatelogo){
                          echo "update logo success";
                        }else{
                            echo "update logo not success";
                        }
                         
                       }
                    
                 */
                 
                 ?>
                     

				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select * from  logo where id='$editlogoid'";
				    $getlogo = $db->catselect($editquery);
					 if($getlogo){
						 
				         while($getresult=$getlogo->fetch_assoc()){
				     ?>
                       
             
                
                   
                       
                       <tr>
                            <td>
                                <label>Logo</label>
                            </td>

                            <td>
                            <img width ="100px" height="100px" src="<?php echo $getresult['logo'];?>"/>
                         </br>
                         </br>
                            <input type="file" name="logo"/>
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