<header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt="" height="100px"> </a>
                        </div>
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="http://localhost/blog/index.php#newblog">Latest blogs</a></li>
                                    <li><a href="http://localhost/blog/index.php#images">Gallary</a></li>
                                    <li><a href="http://localhost/blog/index.php#blog">Blog</a></li>
                                    <?php
                                    if(isset($_SESSION['id']))
                                    {
                                        echo "<li><a href=\"addblog.php\">Add blog</a></li>";
                                        echo "<li><a href=\"yourblog.php\">Your blog</a></li>";
                                        
                                    }  
                                    ?>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul>
                            
                                    <?php

                                        if(isset($_SESSION['id']))
                                        {
                                            $id=$_SESSION['id'];
                                            $select="select * from tbluser where user_id=$id";
                                            $res=mysqli_query($conn,$select);
                                            $result=mysqli_fetch_array($res);

                                            $photo=$result['user_photo'];
                                            ?>
                                            <img style="border-radius:50%;" src="<?php echo "./assets/img/upload/user/".$photo; ?>" height="50px" alt="user_image"/>
                                            <?php 
                                            echo "</li>";
                                            echo "<li>";
                                            echo "<li>";
                                            echo $result['user_name']."<br>"."<a style=\"color:black;\" href=\"logout.php\">logout</a>"; 
                                            echo "</li>"; 
                                           ?>
                                            
                                             
                                      <?php  } 
                                        
                                        else{
?>
                                            <li><a style="color:black;" href="login.php">Login</a></li>/    
                                            <li><a style="color:black;" href="register.php">Register</a></li>
                                       <?php }
                                    ?>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>