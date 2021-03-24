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
</head>
<body>
    <table>
        <tr>
            <td>Full Name:</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>Email id:</td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><?php echo $dob;?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $address;?></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><?php echo $city;?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender;?></td>
        </tr>
        <tr>
            <td>Hobby:</td>
            <td>
                <?php 
                    echo implode(" ",$hobby); 
                ?>
            </td>
        </tr>
        <tr>
            <td>password:</td>
            <td><?php echo $password;?></td>
        </tr>
    </table>
</body>
</html>