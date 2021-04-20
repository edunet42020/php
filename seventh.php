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
    <?php
if(isset($_REQUEST['btn'])){
    $name=$_REQUEST['name'];
    $age=$_REQUEST['age'];
    function checkage($number) 
    {
        if($number<=18) 
        {
            throw new Exception("Sorry!!You are not eligible for voting");
        }
        return true;
    }
    try 
    {
        checkage($age);
        echo '<div class="f"><b>Congratulations!! You are eligible for voting</b></div>';
    }
    catch(Exception $e) {
    echo '<div class="f"><b>' .$e->getMessage().'</b></div>';
    }
}
?>
    <div class="f">
    <?php
       echo "Name:<b>".$name."</b>";
       ?>
       </div>
       <div class="f">
    <?php
       echo "Age:<b>".$age."</b>";
       ?>
       </div>
        </div>
    </div>
</body>
</html>
