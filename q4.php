<?php
    session_start();
?>

<!-- Create Website Registration Form using text box,  check  box,  radio  button,  select,  submitbutton. And display user inserted value in new PHP page. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website registration form</title>
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
        .bg{
            height: 100vh;
            background-color:#eccafa;
        }
       .card{
           background-color:#fafff2;
           padding:10px;
           width:25%;
       }
       .p{
           text-align:center;
           border-radius: 5px;
           padding:10px;
       }
       .cent{
            width:100%;
            text-align:center;
            font-size:x-large;
            font-weight:bold;
            margin:10% 0%;
       }
      input[type=text],input[type=email]{
           width:85%;
           height:25px;
           border-radius:5px; 
           border:1px solid gray;
       }
 
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

    </style>
</head>
<body class="bg">
<div class="container">
<div class="card">
   <form action="#" method="post">
        <p class="cent">Passing variable through session</p>
        <div class="p">
            <input type="text" name="name" required placeholder="Enter your full name"/>
        </div>
        <div class="p">
            <input type="email" name="email" required placeholder="Enter your Emailid"/>
        </div>
        <div class="p">
            <input type="submit" name="btn" value="submit"/>
        </div>
   </form>
   </div>
   </div>
</body>
</html>
<?php
    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $_SESSION["name"]=$name;
        $_SESSION["email"]=$email;
        header("location:fourth.php");
    }
?>