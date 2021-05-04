<?php
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing variables through a URL</title>
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
            <b>Full Name:</b>
            <?php echo $name;?>
        </div>
        <div class="f">
        <b>Email id:</b>
            <?php echo $email;?>
        </div>
        
        </div>
    </div>
</body>
</html>