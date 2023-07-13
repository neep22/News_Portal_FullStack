<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>User Update</h2>
                <div class="block"> 
				   <!--take reffer id bt get method -->
				  <?php 
		             $db=new database();
			        if(isset($_GET['editid'])){
			 
			         $edituserid= $_GET['editid'];
		           }
			  
		  
		  
		        ?>
                
                          <!-- Post method Start-->
               <?php
                 
                    if(isset($_POST['submit'])){

                        $fname=$_POST['fname'];
                        $lname=$_POST['lname'];
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $email=$_POST['email'];
                        $mobile=$_POST['mobile'];
                        $gender=$_POST['gender'];
                        $Terms=$_POST['Terms'];
                        $usertype=$_POST['usertype'];

                        // Post method End

                    
                       if (empty($fname) 
                         || empty($lname)
                         || empty($username) 
                         || empty($password)  
                         || empty($email) 
                         || empty($mobile)
                         || empty($gender) 
                         || empty($Terms) 
                         || empty($usertype)){

                           echo "field must not be empty";
                       }elseif(strlen($password)<8){
                        echo "password should be at least 8 digit";
                    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        echo "Sorry! Your Email is Invalid";
                    }else{
							

                         //select query start

                        $emailquery= "select *from  users  where email= '$email' limit 1";
                        $mailcheck= $db->select($emailquery);

                     if($mailcheck != false){

                        echo "email already exist";
                    
                    
               
					
                        //select query end
                     

                       }else{
                        //update query start

                       $updatequery=" update users                       
                        set
                        fname='$fname',	
                        lname='$lname',
                        username='$username',
                        password='$password',	
                        email='$email',
                        mobile='$mobile',
                        gender='$gender',	
                        Terms='$Terms',
                        usertype='$usertype'

                        WHERE id = $edituserid";
                        $updateuser=$db->update($updatequery);
                        if($updateuser){
                          echo "Users Update Successful";
                        }else{
                            echo "Users Update Not Successful";
                     }
                         
                  }
                    
                    
              }
       }
                //update query end
                 
                 ?>
                     

       
				
				
		
				
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
					
					  <?php
				   //select for edit
				    $editquery="select* from  users where id='$edituserid'";
				    $getuser = $db->catselect($editquery);
					 if($getuser){
						 
				         while($result=$getuser->fetch_assoc()){
				     ?>
                       
             
                
                   
                   
                        <tr>
						      
                            <td>
                                <label>Fast Name: </label>
                            </td>
							
				
                            <td>
							    
							 
                                <input type="text" value="<?php echo $result['fname'] ;?>" name="fname" />
                                
                            </td>
                        </tr>
                       
                        <tr>
						      
                            <td>
                                <label> Last Name: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['lname'] ;?>" name="lname" />
                      
                          </td>
                          </tr>

                          <tr>
						      
                            <td>
                                <label>Username: </label>
                            </td>

                        
                            <td>
                            <input type="text" value="<?php echo $result['username'] ;?>" name="username" />
                      
                          </td>

                          </tr>
						
                          <tr>
						      
                              <td>
                                  <label>Password: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['password'] ;?>" name="password" />
                        
                            </td>
                            </tr>

                            <tr>
						      
                              <td>
                                  <label>Email: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['email'] ;?>" name="email" />
                        
                            </td>
                            </tr>

                            <tr>
						      
                              <td>
                                  <label>Mobile: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['mobile'] ;?>" name="mobile" />
                        
                            </td>
                            </tr>

                            <tr>
						      
                              <td>
                                  <label>Gender: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['gender'] ;?>" name="gender" />
                        
                            </td>
                            </tr>

                            <tr>
						      
                              <td>
                                  <label>Terms: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['Terms'] ;?>" name="Terms" />
                        
                            </td>
                            </tr>

                            <tr>
						      
                              <td>
                                  <label>Usertype: </label>
                              </td>
  
                          
                              <td>
                              <input type="text" value="<?php echo $result['usertype'] ;?>" name="usertype" />
                        
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