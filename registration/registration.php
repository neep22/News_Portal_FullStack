<html>

<?php include 'database.php';?>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
	
	 <?php

      					 $db=new Database();
						$error=$errorpass=$matcherrorpass=$errorname=$erroremail="";
						if(isset($_POST['Submit'])){
						$fname=$_POST['fname'];
					    $lname=$_POST['lname'];
						$username=$_POST['username'];
						$Gender=$_POST['gender'];
						$Terms=$_POST['Terms'];
						$mobile=$_POST['mobile'];
						$email=$_POST['email'];	
						$pass=$_POST['password'];
						$conpass=$_POST['conpassword'];
						if($pass!=$conpass){
						    $matcherrorpass = "password not match";
						   
						}elseif(strlen($pass)<8){
							$errorpass = "password should be at least 8 digit";
						}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
							$erroremail= "Sorry! Your Email is Invalid";
						}else
							 if( $fname =='' 
							 || $lname=='' 
							 || $username=='' 
							 || $Gender=='' 
							 || $Terms=='' 
							 || $mobile=='' 
							 || $email =='' 
							 || $pass =='' 
							 || $conpass ==' ' ){
							echo "field must not be empty";
						}else{
							
							$emailquery= "select *from  users  where email= '$email' limit 1";
			                $mailcheck= $db->select($emailquery);

			             if($mailcheck != false){

			            	$erroremail = "email already exist";
			        	}
						
						
						
						
						else{

                             $query="insert into users(fname,lname,username,password,email,mobile,gender,Terms,usertype)
							 values('$fname','$lname','$username','$pass','$email','$mobile','$Gender','yes','user')";
							 $insert_user=$db->insert($query);

							 if($insert_user){
								 echo "<script>alert('registration success')</script>";
							 }else{
								  echo "<script>alert('Somthing went wrong')</script>";
							 }
							 
						}
						
						}
					}





	 ?>
	
	
	
	
	
	
      <form method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="fname" placeholder="First Name"
              class="textBox" autofocus="on" required>
			  <span style="color:#fff"><?php echo $errorname;?></span>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="lname"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->
			
			
			
			<div class="box">
          <label for="secondName" class="fl fontLabel"> Username: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="username"
              placeholder="Last Name" class="textBox">
			  
    			</div>
    			<div class="clr"></div>
    		</div>


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="mobile" maxlength="13" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
						<span style="color:#fff"><?php echo $erroremail;?></span>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" placeholder="Password" class="textBox">
							<span style="color:#fff"><?php echo $errorpass;?></span>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

              <!---Con Password------>
    		<div class="box">
                <label for="password" class="fl fontLabel"> Password </label>
                      <div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
                      <div class="fr">
                              <input type="Password" required name="conpassword" placeholder="Confirm Password" class="textBox">
							  <span style="color:#fff"><?php echo $matcherrorpass;?></span>
                      </div>
                      <div class="clr"></div>
                  </div>
                  <!---Con Password---->





    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
