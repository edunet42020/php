<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysql server connection</title>
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
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) { ?>
<div class="container">
    <div class="card">
        <div class="f">
           <h2><?php die("Connection failed: " . $conn->connect_error); ?></h2>
        </div>
    </div>
</div>
<? }
?>  

<body>
<div class="container">
    <div class="card">
        <div class="f">
           <h2>Connected successfully</h2>
        </div>
    </div>
</div>
</body>
</html>