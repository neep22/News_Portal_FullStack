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
    <div class="catagory-area">
        <div class="border">
            <div class="Catagories fix">
                <div class="news-catagory fix">
                    <div class="single-catagory fix">
                     <!--news start-->
               <?php
               //select for news
               $db=new database();
			   $fm=new Format();
			   
               $newsquery="Select news.*,catagory.CatName,subcategories.subcatname
               from news
               INNER JOIN catagory on news.catid=catagory.id
               INNER JOIN subcategories on news.subCatId=subcategories.id
                order by id asc limit 4";
               $newsRead=$db->newsselect($newsquery);
               if($newsRead){

                   while($newsResult=$newsRead->fetch_assoc()){
              
               
               
               ?>
            
            
            <img src="admin/<?php echo $newsResult['image']; ?>" alt= "news"/>
             <p><?php echo $newsResult['title'];?></p>
            
             <h4>Published: <?php echo $newsResult['newsDate'];?></h4>
           
					<?php }};?>
                    <!--news End-->
                  </div>
                </div> 
                <div class="search fix">
                    <div class="single-search fix">
                        <h1>Search</h1>
                        <input type="text" placeholder="Search For..">
                        <h2><a href="">GO</a></h2>
                    </div>
                    <div class="single-search1">
                        <h1>Catagories</h1>
                        <ul>
                               <!-- catagory start-->
                   <?php
                  //select for catagory
                  $db=new database();
			      $fm=new Format();
			   
			    $query="select * from catagory order by id desc limit 6";
                $catread=$db->catselect($query);
                if($catread){
                    
                    while($catresult=$catread->fetch_assoc()){
               
               
               ?>

                 <li><a href="newsbycat.php?newsbycatid=<?php echo $catresult['id']; ?>"><?php echo $catresult['CatName'];?></a></li>
				   <?php }};?>
                       </ul>
                    </div>
                    <div class="single-search2">
                        <h1>Recent News</h1>
                        <ul>
                        <?php
                    
                    //select for news
                         $db=new database();
                         $fm=new Format();
                   
                        $query="select * from news order by id asc limit 6";
                        $newsread=$db->newsselect($query);
                        if($newsread){
                        
                        while($newsresult=$newsread->fetch_assoc()){
                   
                   
                   ?>
    
                     <li><a href=""><?php echo $newsresult['title'];?></a></li>
                       <?php }};?>

                        </ul>
                    </div>
                    <div class="single-search3">
                        <h1>Popular News</h1>
                        <ul>
                        <?php
                    
                    //select for news
                         $db=new database();
                         $fm=new Format();
                   
                        $query="select * from news order by id asc limit 6";
                        $newsread=$db->newsselect($query);
                        if($newsread){
                        
                        while($newsresult=$newsread->fetch_assoc()){
                   
                   
                   ?>
    
                     <li><a href=""><?php echo $newsresult['title'];?></a></li>
                       <?php }};?>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="next fix">
                <h1> <a href="">First</a></h1>
                <h2> <a href="">Next</a></h2>
                <h3> <a href="">Last</a></h3>
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