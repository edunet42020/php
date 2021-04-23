<?php
    session_start();
    include_once("connection.php");
    if(!isset($_SESSION['id']))
    {
        header("location:login.php");
    }
?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <style>
        select{
            width:200px;
        }
    </style>
    <?php
        include_once("cssfile.php");
    ?>
</head>
<body>
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
                                <h2>Add Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Add your blog detail</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Blog detail</h3>
                                  
                                <form class="row contact_form" action="insertblog.php" method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="title" name="title" value="" placeholder="Blog title">
                                        <small id="title_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="file" class="form-control" id="photo" name="photo"  accept="image/*">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <textarea class="form-control" id="des" name="des" placeholder="blog description" rows="8"></textarea>    
                                        <small id="des_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <select style="width:200px;" name="category">
                                            <option value="Fashion">Fashion blog</option>
                                            <option value="Food">Food blog</option>
                                            <option value="Travel">Travel blog</option>
                                            <option value="Music">Music blog</option>
                                            <option value="Lifestyle">Lifestyle blog</option>
                                            <option value="Fitness">Fitness blog</option>
                                            <option value="DIY">DIY blog</option>
                                            <option value="Sports">Sports blog</option>
                                            <option value="Buisenees">Buisenees blog</option>
                                            <option value="Personal">Personal blog</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-12 form-group">
                                        
                                        <button type="submit" value="submit" name="btn" class="btn_3">
                                            Add
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
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
  <?php
  if(isset($_REQUEST['msg']))
        {
            echo "<script>swal(\"Congratulations!\", \"Registration success!!,Please login\", \"success\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/login.php'>";
	
        }
    ?>
</body>
    
</html>
<?php
        if(isset($_REQUEST['notadded']))
        {
            echo "<script>swal(\"Sorry!\", \"Added failed!!\", \"error\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/addblog.php'>";
        }
        if(isset($_REQUEST['added']))
        {
            echo "<script>swal(\"Congratulations!\", \"Blog added successfully!!\", \"success\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/addblog.php'>";
        }
    ?>
     <script>
    $(document).ready(function(){
     

        $('#title').keypress(function(){
           fname = $('#title').val();
          var fname_regx = /^[a-zA-Z0-9 ]{5,200}$/;
          if(fname.match(fname_regx))
          {
            $('#title_error').hide();
          }
          else
          {
            $('#title_error').html("Enter Valid Title");
            $('#title_error').show();  

          }

        });

        $('#des').keypress(function(){
           mname = $('#des').val();
          var mname_regx = /^[a-zA-Z0-9 !@#$%^&*]{10,6999}$/;
          if(mname.match(mname_regx))
          {
            $('#des_error').hide();
          }
          else
          {
            $('#des_error').html("Enter Valid descrption");
            $('#des_error').show();

          }

        });
          
    });
    </script>