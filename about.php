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
                  <!-- logo start-->
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
    <div class="about-area">
        <div class="border">
            <div class="about">
                <h1>About News Portal</h1>
            </div>
            <div class="about-menu fix">
                <ul>
                    <li> <a href="index.php">Home</a></li>
                    <li>/</li>
                    <li> <a href="about.php">About</a></li>
                </ul>
            </div>
            <div class="about-des">
                    <!-- about start-->
                    <?php
                
                //select for about
                     $db=new database();
			         $fm=new Format();
			   
			        $query="select * from about order by id asc limit 1";
                    $aboutread=$db->aboutselect($query);
                    if($aboutread){
                    
                    while($aboutresult=$aboutread->fetch_assoc()){
               
               
               ?>

                <p><?php echo $aboutresult['description'];?></p>
				   <?php }};?>

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
                     <!-- Footer start-->
                 <?php
                
                //select for footer
                     $db=new database();
			         $fm=new Format();
			   
			        $query="select * from footer order by id desc limit 1";
                    $footerread=$db->newsselect($query);
                    if($footerread){
                    
                    while($footerresult=$footerread->fetch_assoc()){
               
               
               ?>
                <img src="images/location.png" alt="location"/>
                <h3><?php echo $footerresult['Address'];?></h3>
				   

                   
                    
                    <img src="images/number.png" alt="number"/>
                    <h3><?php echo $footerresult['Phone'];?></h3>
                    <img src="images/email.png" alt="email"/>
                    <p><?php echo $footerresult['Email'];?></p>

                    <?php }};?>
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