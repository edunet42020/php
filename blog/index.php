<?php
    session_start();
    include_once("connection.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        include_once("cssfile.php");
    ?>
</head>

<body>
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
            <div>
               
                <?php
                    include_once("home.php");
                ?>  
            </div>
        </div>
      
      <?php
        include_once("newblogs.php");
        include_once("images.php");
        include_once("blog.php");
      ?>
        
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
    <?php
        if(isset($_REQUEST['msg']))
        {
            echo "<script>swal(\"Sorry!\", \"Regestration failed!!\", \"error\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/index.php'>";
        }
        if(isset($_REQUEST['login']))
        {
            echo "<script>swal(\"Congratulations!\", \"Login successful!!\", \"success\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/index.php'>";
        }
        if(isset($_REQUEST['ual']))
        {
            echo "<script>swal(\"yeah!\", \"You are already logged in!!\", \"info\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/index.php'>";
        }
    ?>
</body>
</html>