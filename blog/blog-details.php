<?php 
   session_start();
   include_once("connection.php");   
   $id=$_REQUEST['blogid'];
   $select="select * from tblblog where blog_id=$id";
   $resblog=mysqli_query($conn,$select);
   $resultblog=mysqli_fetch_array($resblog);
   // print_r($result);
?>
<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Blog detail</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="site.webmanifest">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
      <?php
        include_once("cssfile.php");
    ?>
    </head>

<body>
   <!-- Preloader Start -->
   <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text">
                  <img src="assets/img/logo/logo.png" alt="">
               </div>
            </div>
      </div>
   </div>
   <?php
        include_once("header.php");
    ?>
      <main>
      <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                        <div class="col-xl-12">
                           <div class="hero-cap text-center">
                              <h2>Blog details</h2>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
      
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                     <?php
                                    $photo="assets/img/upload/blog/".$resultblog['blog_image'];
                                ?>
                                <img class="img-fluid" src="<?php echo $photo; ?>" alt="">                    </div>
                     <div class="blog_details">
                        <h2><?php echo $resultblog['blog_title'];?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i><?php echo $resultblog['blog_category'];?></a></li>
                           <li><a href="#"><i class="fa fa-comments"></i> 1000 Comments</a></li>
                        </ul>
                        <p class="excert">
                        <?php echo $resultblog['blog_descrption'];?></p>
                       
                        

                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                           people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <?php 
                     $userid=$resultblog['blog_userid'];
                     $selectuser="select * from tbluser where user_id=$userid";
                     $resuser=mysqli_query($conn,$selectuser);
                     $resultuser=mysqli_fetch_array($resuser);
                     $photo="assets/img/upload/user/".$resultuser['user_photo'];
                                
                  ?>
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="<?php echo $photo;?>" alt="">
                        <div class="media-body">
                           <a href="#">
                              
                              <h4><?php echo $resultuser['user_name'];?></h4>
                           </a>
                           <p>Writer of above blog</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                 
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Resaurant food</p>
                                 <p>(37)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Travel news</p>
                                 <p>(10)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Modern technology</p>
                                 <p>(03)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Product</p>
                                 <p>(11)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Inspiration</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Health Care</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                    
                     <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                           <li>
                              <a href="#">project</a>
                           </li>
                           <li>
                              <a href="#">love</a>
                           </li>
                           <li>
                              <a href="#">technology</a>
                           </li>
                           <li>
                              <a href="#">travel</a>
                           </li>
                           <li>
                              <a href="#">restaurant</a>
                           </li>
                           <li>
                              <a href="#">life style</a>
                           </li>
                           <li>
                              <a href="#">design</a>
                           </li>
                           <li>
                              <a href="#">illustration</a>
                           </li>
                        </ul>
                     </aside>

                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   <?php
      include_once("footer.php");
   ?>
   <div class="search-model-box">
         <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
               <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
         </div>
   </div>
   <?php
      include_once("scriptfile.php");
   ?>
      
</body>

</html>