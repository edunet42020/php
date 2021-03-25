<?php
    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $dob=$_REQUEST['date'];
        $address=$_REQUEST['add'];
        $city=$_REQUEST['city'];
        $gender=$_REQUEST['gender'];
        $password=$_REQUEST['password'];
        $hobby=$_REQUEST['hobby'];
    }
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
            <b>Full Name:</b>
            <?php echo $name;?>
        </div>
        <div class="f">
        <b>Email id:</b>
            <?php echo $email;?>
        </div>
        <div class="f">
        <b> Date of Birth:</b>
            <?php echo $dob;?>
        </div>
        <div class="f">
        <b>Address:</b>
            <?php echo $address;?>
        </div>
        <div class="f">
        <b>City:</b>
            <?php echo $city;?>
        </div>
        <div class="f">
        <b>Gender:</b>
            <?php echo $gender;?>
        </div>
        <div class="f">
        <b>Hobby:</b>
            
                <?php 
                    echo implode(" ",$hobby); 
                ?>
        </div>   
        <div class="f">
        <b>password:</b>
            <?php echo $password;?>
        </div>
        </div>
    </div>
</body>
</html>