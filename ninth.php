<?php
    if(isset($_REQUEST['btn']))
    {
        include_once("connection.php");
        $name=$_REQUEST['name'];
        $item=$_REQUEST['item'];
        $number=$_REQUEST['number'];
        $insert="insert into tblcustomer values(null,'$name','$item',$number)";
        mysqli_query($conn,$insert);
        $select="select * from tblcustomer";
        $res=mysqli_query($conn,$select);
    }
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
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
        <table>
            <tr>
                <th>customer id</th>
                <th>customer name</th>
                <th>item purchase</th>
                <th>mobile number</th>
            </tr>
            <?php
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
        ?>
        </table>
        </div>
    </div>
</body>
</html>