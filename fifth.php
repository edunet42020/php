<?php
$cookie_name = "name";
$cookie_value = $_REQUEST['name'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student detail</title>
    <style>
        *{
            padding:0px;
            margin:0px;
        }
        .container{
            display:grid;
            place-items:center;
            height:97vh;
        }
        
        body{
            background-color:#60abfb;
        }
        .card{
           background-color:#aee1fc;
           padding:10px;
           width:25%;
       }
       .f{
           padding:10px;
           font-size:20px;
       }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="f">
           <?php  if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo$cookie_name. " :";
  echo "<b>" . $_COOKIE[$cookie_name]."</b>";
} ?>
        </div>
        </div>
    </div>
</body>
</html>