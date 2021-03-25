<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student regestration Form</title>
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
       select,input[type=text],input[type=date],input[type=email],input[type=password]{
           width:85%;
           height:25px;
           border-radius:5px; 
           border:1px solid gray;
       }
       input[type=radio]
       {
           width:8%;
           border:1px solid gray;
       }
       input[type=checkbox]
       {
           width:15%;
           border:1px solid gray;
       }
       textarea{
        width:85%;
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
   <form action="insert.php" method="get">
        <p class="cent">Student registration form</p>
        <div class="p">
            <input type="text" name="name" required placeholder="Enter your full name"/>
        </div>
        <div class="p">
            <input type="email" name="email" required placeholder="Enter your Emailid"/>
        </div>
        <div class="p">
            <input type="date" name="date" required placeholder="Birthdate"/>
        </div>
        <div class="p">
            <textarea name="add" rows="5" cols="20" required placeholder="Enter your address here..."></textarea>
        </div>
        <div class="p">
            <select name="city">
                <option value="Surat">Surat</option>
                <option value="Ahemdabad">Ahemdabad</option>
                <option value="Dhule">Dhule</option>
                <option value="Pune">Pune</option>
            </select>
        </div>
    
        <div class="p">
            <input type="radio" name="gender" checked group="sgender" value="Female"/>Female
            <input type="radio" name="gender" group="sgender" value="Male"/>Male
            <input type="radio" name="gender" group="sgender" value="Not to Say"/>Not to Say
        </div>
        <div class="p">
            <input type="checkbox" name="hobby[]" checked value="Sports"/>Sports
            <input type="checkbox" name="hobby[]" value="Swimming"/>Swimming<br>
            <input type="checkbox" name="hobby[]" value="Reading"/>Reading
            <input type="checkbox" name="hobby[]" value="Travelling"/>Travelling<br>
            <input type="checkbox" name="hobby[]" value="Photography"/>Photography    
        </div>
        <div class="p">
            <input type="password" name="password" required placeholder="Enter your password"/>
        </div>
        <div class="p">
            <input type="submit" name="btn" value="submit"/>
        </div>

   </form>
   </div>
   </div>
</body>
</html>