<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student regestration Form</title>
<<<<<<< HEAD
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
            background-color:#957DAD;
        }
       .card{
           background-color:#FDE6CC;
           padding:10px;
       }
    </style>
</head>
<body class="bg">
<div class="container">
<div class="card">
   <form action="insert.php" method="get">

            <caption>Student regestration form</caption>
            
            
            
                <label for="name">Full name</label>
                <input type="text" name="name" placeholder="Enter your full name"/>
            
            
                <label for="emailid">Email id</label>
                <input type="email" name="email" placeholder="Enter your Emailid"/>
            
            
                <label for="dateofbirth">Date of Birth</label>
                <input type="date" name="date" placeholder="Birthdate"/>
            
            
                <label for="address">Address</label>
                <textarea name="add" rows="5" cols="20"></textarea>
            
            
                <label for="city">City</label>
                
=======
</head>
<body>
   <form action="#" method="post">
        <table>
        <tr>
            <td colspan="2">
            <caption>Student regestration form</caption>
            </td>
            </tr>
            <tr>
                <td><label for="name">Full name</label></td>
                <td><input type="text" name="name" placeholder="Enter your full name"/></td>
            </tr>
            <tr>
                <td><label for="emailid">Email id</label></td>
                <td><input type="email" name="email" placeholder="Enter your Emailid"/></td>
            </tr>
            <tr>
                <td><label for="dateofbirth">Date of Birth</label></td>
                <td><input type="date" name="date" placeholder="Birthdate"/></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><textarea name="add" rows="5" cols="20"></textarea></td>
            </tr>
            <tr>
                <td><label for="city">City</label></td>
                <td>
>>>>>>> origin/main
                    <select name="city">
                        <option value="Surat">Surat</option>
                        <option value="Ahemdabad">Ahemdabad</option>
                        <option value="Dhule">Dhule</option>
                        <option value="Pune">Pune</option>
                    </select>
<<<<<<< HEAD
                
            
            
                <label for="gender">Gender</label>
                
                    <input type="radio" name="gender" group="sgender" value="Female"/>Female
                    <input type="radio" name="gender" group="sgender" value="Male"/>Male
                    <input type="radio" name="gender" group="sgender" value="Not to Say"/>Not to Say
                
            
            
                <label for="hobbies">Hobbies</label>
                
                    <input type="checkbox" name="hobby[]" value="Sports"/>Sports
                    <input type="checkbox" name="hobby[]" value="Swimming"/>Swimming<br>
                    <input type="checkbox" name="hobby[]" value="Reading"/>Reading
                    <input type="checkbox" name="hobby[]" value="Travelling"/>Travelling<br>
                    <input type="checkbox" name="hobby[]" value="Photography"/>Photography
                
            
            
                <label for="password">Password</label>
            
                    <input type="password" name="password"/>
                    <input type="submit" name="btn" value="submit"/>
   </form>
   </div>
   </div>
</body>
</html>
=======
                </td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <input type="radio" name="gender" group="sgender" value="Female"/>Female
                    <input type="radio" name="gender" group="sgender" value="Male"/>Male
                    <input type="radio" name="gender" group="sgender" value="Not to Say"/>Not to Say
                </td>
            </tr>
            <tr>
                <td><label for="Date of birth">Hobbies</label></td>
                <td>
                <input type="checkbox" name="hobby" value="Sports"/>Sports
                <input type="checkbox" name="hobby" value="Swimming"/>Swimming<br>
                <input type="checkbox" name="hobby" value="Reading"/>Reading
                <input type="checkbox" name="hobby" value="Travelling"/>Travelling<br>
                <input type="checkbox" name="hobby" value="Photography"/>Photography
                </td>
            </tr>
            <tr>
                <td><label for="Date of birth">Date of Birth</label></td>
                <td></td>
            </tr>
            <tr>
                <td><label for="Date of birth">Date of Birth</label></td>
                <td></td>
            </tr>
        </table>
   </form>
</body>
</html>
>>>>>>> origin/main
