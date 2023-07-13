<!DOCTYPE html>
<?php 
include 'helper/format.php';
include 'database.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link rel="stylesheet" href="design.css"/>
    <link rel="stylesheet" href="Responsive.css"/>
</head>
<body>
    <div class="border-area" style="background-image: url('Images/banner.jpg')">
        <div class="border">
            <div class="head fix">
                <  <!-- logo start-->
               <?php
               //select for logo
               $db=new database();
			   $fm=new Format();
			   
			    $query="select * from logo order by id desc limit 1";
                $logoread=$db->logoselect($query);
                if($logoread){
                    
                    while($logoresult=$logoread->fetch_assoc()){
               
               
               ?>
            
            
            <div class="logo fix">
            <a href="index.php"><img src="admin/<?php echo $logoresult['logo'];?>" alt="logo"/></a>
					<?php }};?>
                    <!--logo End-->
                    <h1>NEWS PORTAL</h1>
                </div>
                <div class="menu fix">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-area">
        <div class="border">
            <div class="contact-info">
                <h1>Contact Details</h1>
            </div>
            <div class="contact-menu fix">
                <ul>
                    <li> <a href="index.html">Home</a></li>
                    <li>/</li>
                    <li> <a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form-area">
        <div class="border">
            <div class="contact fix">
                <div class="contact-form">
                    <h3>Quick Connect</h3>
                    <form method="post" action="">
                        <h1>First Name</h1> 
                        <input type="text" name="FirstName"/>
                        <h1>Last Name</h1>
                        <input type="text" name="LastName"/>
                        <h1>Email</h1> 
                        <input type="eamil" name="YourEmail"/>
                        <h1>Phone number</h1>
                        <input type="phone" name="Yourphone"/>
                        <h1>Address</h1> 
                        <input type="text" name="Address"/>
                        <textarea placeholder="Your Message"></textarea>
                        <input type="submit" value="Submit"/>
                    </form> 
                </div>
                <div class="contact-map">
                    <h1>Map</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.185972273947!2d91.8693127248785!3d24.891637332988417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751ab2b257201fb%3A0x91c8a37185874801!2z4Kaw4KaC4Kau4Ka54KayIOCmn-CmvuCmk-Cnn-CmvuCmsCwgQmFuZGFyIEJhemFyIFJkLCDgprjgpr_gprLgp4fgpp8!5e0!3m2!1sbn!2sbd!4v1657649539102!5m2!1sbn!2sbd"></iframe>
                </div>  
            </div>    
        </div>
    </div> 
    <footer class="footer-area">
        <div class="border">
            <div class="footer fix">
                <div class="sing-footer1 fix">
                    <h1>Follow Me</h1>
                    <a href="https://www.facebook.com/">
                        <img src="images/icon.png" alt="image"/>
                    </a>
                    <a href="https://twitter.com/">
                        <img src="images/icon1.png" alt="image"/>
                    </a>
                    <a href="https://twitter.com/">
                        <img src="images/icon2.png" alt="image"/>
                    </a>
                    <a href="https://twitter.com/">
                        <img src="images/icon3.png" alt="image"/>
                    </a>
                    <a href="https://twitter.com/">
                        <img src="images/icon4.png" alt="image"/>
                    </a>

                </div>

                <div class="sing-footer fix">
                    <h1>Address</h1>
                    <img src="images/location.png" alt="location"/>
                    <p>4th Floor, Rangmahal Tower, Bandar Bazar, Sylhet.</p>
                    <img src="images/number.png" alt="number"/>
                    <h3>01886467644</h3>
                    <img src="images/email.png" alt="email"/>
                    <p><a href="">newsportal@gmail.com</a></p>
                </div>
                
                <div class="sing-footer2">
                    <h1>Legal</h1>
                    <ul>
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="sing fix">
                    <div class="sing-footer3">
                        <p>All rights reserved by &copy; <span>News Portal</span> 2022</p>
                    </div>
                </div>    
            </div>
        </div>
    </footer>
</body>
</html>