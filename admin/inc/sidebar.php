 <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Sidebar Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.php">Title & Slogan</a></li>
                                <li><a href="copyright.php">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                        <li><a class="menuitem">social</a>
                            <ul class="submenu">
                                <li><a href="addsocial.php">Add social</a></li>
                                <li><a href="sociallist.php">social list</a></li>
                            </ul>
                        </li>

                         

                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="addcat.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                        </li>
						
						
						
                        <li><a class="menuitem">SubCategory Option</a>
                            <ul class="submenu">
                                <li><a href="addsubcat.php">Add SubCategory</a> </li>
                                <li><a href="subcatlist.php">SubCategory List</a> </li>
                            </ul>
                        </li>
						
						
						
						
						
                        <li><a class="menuitem">News  Option</a>
                            <ul class="submenu">
                                <li><a href="addnews.php">Add News</a> </li>
                                <li><a href="newslist.php">News List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Product Option</a>
                            <ul class="submenu">
                                <li><a href="addproduct.php">Add product</a> </li>
                                <li><a href="productlist.php">product List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Logo Option</a>
                            <ul class="submenu">
                                <li><a href="addlogo.php">Add logo</a> </li>
                                <li><a href="logolist.php">logo List</a> </li>
                            </ul>
                        </li>

						<li><a class="menuitem">Banner option</a>
                            <ul class="submenu">
                                <li><a href="addbanner.php">Add banner</a> </li>
                                <li><a href="bannerlist.php">banner List</a> </li>
                            </ul>
                        </li>
                        
                        
                        <li><a class="menuitem">User Type Option</a>
                            <ul class="submenu">
                                <li><a href="adduser.php">Add User</a> </li>
                                <li><a href="userlist.php">User List</a> </li>
                            </ul>
                        </li>

						<?php
						 if($_SESSION['usertype']=='admin'){



						?>
						
                        <li> <a href="message_list.php">Messages</a> </li>
						 <?php }?>
						<li> <a href="#">setting</a> </li>
                    </ul>
                </div>
            </div>
        </div>