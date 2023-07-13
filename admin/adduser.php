<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add User</h2>
                <div class="block"> 
				<!--add user php start -->
				
				    <?php
				    $db=new database();
				    if(isset($_POST['submit'])){
					$error=$errorpass=$matcherrorpass=$errorname=$erroremail="";
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$username=$_POST['username'];
                    $password=$_POST['password'];
                    $email=$_POST['email'];
                    $mobile=$_POST['mobile'];
                    $gender=$_POST['gender'];
                    $Terms=$_POST['Terms'];
                    $usertype=$_POST['usertype'];

                    
					 if (empty($fname) 
                     || empty($lname)
                     || empty($username) 
                     || empty($password)  
                     || empty($email) 
                     || empty($mobile)
                     || empty($gender) 
                     || empty($Terms) 
                     || empty($usertype))
                    
                    
                    {
						echo "fill must not be empty";
                    } elseif(strlen($password)<8){
                        echo "password should be at least 8 digit";
                    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        echo "Sorry! Your Email is Invalid";
                    }else{
							
                        $emailquery= "select *from  users  where email= '$email' limit 1";
                        $mailcheck= $db->select($emailquery);

                     if($mailcheck != false){

                        echo "email already exist";
                    
                    
               
					
                        
                     }else{
						
                        // users table insert query start 

						$usersinsert="INSERT INTO  users (fname,lname,username,password,email,mobile,gender,Terms,usertype) 
                        VALUES ('$fname','$lname','$username','$password','$email','$mobile','$gender','$Terms','$usertype')";

                        $usersinsert_rows=$db->catinsert($usersinsert);
                        if( $usersinsert_rows){
							echo "User  insert success";
						}else
							echo "user`insert not success";

					}
					
				
                }    
            
       }
               
                  // users table insert query end
				?>
				  
				
			
				
		
				
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                
                     
                
                   
                   
                         <tr>

                            <td>
                           <label>First Name:</label>
						    <input type="text" name="fname"/>
                            </td>
						 </tr>
							
						<tr>
							
							<td>
							<label>Last Name:</label>
                            <input type="text" name="lname"/> 
                            </td>
							</tr>
							
						<tr>
                            <td>
							<label>Username:</label>
                            <input type="text" name="username"/>
                            </td>
						
						</tr>


                        <tr>
                            <td>
							<label>Password:</label>
                            <input type="text" name="password"/>
                            </td>
						
						</tr>

                        <tr>
                            <td>
							<label>Email:</label>
                            <input type="text" name="email"/>
                            </td>
						
						</tr>

                        <tr>
                            <td>
							<label>Mobile:</label>
                            <input type="text" name="mobile"/>
                            </td>
						
						</tr>
                        <tr>
                            <td>
							<label>Gender:</label>
                            <input type="text" name="gender"/>
                            </td>
						
						</tr>
                        <tr>
                            <td>
							<label>Terms:</label>
                            <input type="text" name="Terms"/>
                            </td>
						
						</tr>
                        <tr>
                            <td>
							<label>User Type:</label>
                            <input type="text" name="usertype"/>
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