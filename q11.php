<?php
    include_once("connection.php");
    $select="select * from tblemp";
    $res=mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer detail</title>
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
       tr{
           padding:10px;
       }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
        <table>
            <tr>
                <th>Employee id</th>
                <th>Employee name</th>
                <th>Employee designation</th>
                <th>Employee salary</th>
            </tr>
            <?php
                if(mysqli_num_rows($res)<=0)
                {
                    echo "<tr>
                    <td colspan=\"5\" align='center'><b><h2>No record found</h2></b></td>
                    </tr>";
                }
                else
                {
                while($result=mysqli_fetch_array($res))
                {
                    echo "<tr>
                    <td>$result[0]</td>
                    <td>$result[1]</td>
                    <td>$result[2]</td>
                    <td>$result[3]</td>
                    </tr>";
            ?>
        <?php 
            }
        }
        ?>
        </table>
        </div>
    </div>
</body>
</html>