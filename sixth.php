<?php
    session_start();
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
    <?php
       echo "Email:<b>".$_REQUEST['email']."</b>";
       ?>
       </div>
       <div class="f">
    <?php
       echo "Password:<b>".$_REQUEST['password']."</b>";
       ?>
       </div>
        <div class="f">
           <?php
           if(isset($_SESSION['views']))
                $_SESSION['views'] = $_SESSION['views']+1;
            else
                $_SESSION['views']=1;
      
            echo"You visited this webpage for <b>".$_SESSION['views']."</b> times";?>
        </div>
        </div>
    </div>
</body>
</html>