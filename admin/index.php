<?php include 'inc/header.php' ;?>
<?php include 'inc/sidebar.php' ;?>
<?php include 'lib/database.php' ;?>


        <div class="grid_10">
		
            <div class="box round first grid">
                <h2> Dashbord</h2>
                <div class="block">               
                   <div >
				      <h1 >News</h2>
					  <?php
					  $db= new database(); 
					  $news="select * from news";
					  $newsread=$db->catselect($news);
					  $totalnews=mysqli_num_rows($newsread);
					  ?>
					  <h4 ><?php echo $totalnews;?></h4>
				   
				   </div>
				   
				    <div >
				      <h1>Categories</h2>
					  <?php
					  $db= new database(); 
					  $catagory="select * from catagory";
					  $catread=$db->catselect($catagory);
					  $totalcatagory=mysqli_num_rows($catread);
					  ?>
					  <h4 ><?php echo $totalcatagory;?></h4>
				   
				   </div>
				   	<div >
				      <h1 >Sub Categories</h2>
					  <?php
					  $db= new database(); 
					  $subcatagory="select * from subcategories";
					  $subcatread=$db->catselect($subcatagory);
					  $totalsubcatagory=mysqli_num_rows($subcatread);
					  ?>
					  <h4 ><?php echo $totalsubcatagory;?></h4>
				   
				   </div>  

				   
                </div>
            </div>
        
<?php include 'inc/footer.php' ;?>