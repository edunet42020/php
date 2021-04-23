<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>register | Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
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
                                <h2>Register</h2>
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
                                <h2>Already have an account?</h2>
                                <a href="login.php" class="btn_3">Sign in</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Fill the details<br>
                                    Please Sign up now</h3>
                                <form class="row contact_form" action="insert.php" method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name">
                                            <small id="firstname_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="file" class="form-control" id="photo" name="photo"  accept="image/*">

							    	
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="emailid" class="form-control" id="email" name="email" placeholder="Email id">
                                        <small id="email_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">

							    	<small id="pass_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" name="btn" value="submit" class="btn_3">
                                            Register
                                        </button>
                                        already have an account?
                                        <a class="lost_pass" href="login.php">Sign in</a>
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
</body>
    
</html>
<script>
    $(document).ready(function(){
       

        $('#name').keypress(function(){
           fname = $('#name').val();
          var fname_regx = /^[a-zA-Z ]{1,50}$/;
          if(fname.match(fname_regx))
          {
            $('#firstname_error').hide();
          }
          else
          {
            $('#firstname_error').html("Enter Valid first Name");
            $('#firstname_error').show();  
          }

        });
  
        $('#email').keypress(function(){
          var email = $('#email').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#email_error').hide();
          }
          else
          {
            $('#email_error').html("Enter Valid Email.");
            $('#email_error').show();  
            // $('#email').focus();
          }
        });

        $('#password').keypress(function(){
          var pass = $('#password').val();
          // var pass_regx = ;
          if(pass.length > 8 && pass.length < 20)
          {
            $('#pass_error').hide();
          }
          else
          {
            $('#pass_error').html("password must between 8 to 20 character");
            $('#pass_error').show();  
            // $('#pass').focus();  
          }
        });
       
        
    });
    </script>
 