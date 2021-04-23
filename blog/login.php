<?php
    session_start();
    include_once("connection.php");
    if(isset($_SESSION['id']))
    {
        header("location:index.php?ual");
    }
?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Blog</title>
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
                                <h2>Login</h2>
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
                                <h2>New to our site?</h2>
                                <a href="register.php" class="btn_3">Create an Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now</h3>
                                <form class="row contact_form" action="check.php" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="emailid" name="emailid" value=""
                                            placeholder="Email id">

							    	<small id="username_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" value=""
                                            placeholder="Password">
                                            <small id="pass_error" class="text-danger"></small>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" value="submit" name="btn" class="btn_3">
                                            log in
                                        </button>
                                        <a class="lost_pass" href="#">forget password?</a>
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
        if(isset($_REQUEST['invalid']))
        {
            echo "<script>swal(\"Sorry!\", \"Invalid credentials\", \"error\")</script>";
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/blog/login.php'>";
	
        }
    ?>
</body>
    
</html>
<script>
    $(document).ready(function(){
       	$('#username_error').hide();
        $('#pass_error').hide();

       
        $('#emailid').keypress(function(){
          var email = $('#emailid').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#username_error').hide();
          }
          else
          {
            $('#username_error').html("Enter Valid Email.");
            $('#username_error').show();  
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
    
 	 