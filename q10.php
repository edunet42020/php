<?php
    include_once("connection.php");
    $select="select * from tblcustomer";
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
    </style>
    <script type="text/javascript">
function check()
{
	var c=confirm("Want ot Delete...");
	return c;
}
</script>
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
                <th>Edit</th>
                <th>Delete</th>
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
                    <td><a href=\"edit.php?id=$result[0]\">Edit</a></td>
                    <td><a href=\"delete.php?id=$result[0]\" onclick=\"return check();\">Delete</a></td>
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
<?php
    if(isset($_REQUEST['update']))
    {
        echo "<script>alert(\"updated successfully\");</script>";
    }
    if(isset($_REQUEST['notupdate']))
    {
        echo "<script>alert(\"error in updation, please try later\");</script>";
    }
    if(isset($_REQUEST['done']))
    {
        echo "<script>alert(\"deleted successfully\");</script>";
    }
    if(isset($_REQUEST['notdone']))
    {
        echo "<script>alert(\"error in deletion\");</script>";
    }
?>