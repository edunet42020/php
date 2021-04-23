<?php
    include_once("connection.php");
    $id=$_REQUEST['id'];
    $select="select * from tblcustomer where customer_no=$id";
    $res=mysqli_query($conn,$select);
    $result=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
       select,input[type=text],input[type=number]{
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
<input type="hidden" name="id" value="<?php if(isset($_REQUEST['id'])) {echo $result[0];}?>"/>
    <div class="p">
        <input type="text" name="custname" placeholder="Enter first name" value="<?php if(isset($_REQUEST['id'])) {echo $result[1];}?>"/>
    </div>
    <div class="p">
        <input type="text" name="item" placeholder="Enter last name" value="<?php if(isset($_REQUEST['id'])) {echo $result[2];}?>"/>
    </div>
    <div class="p">
        <input type="number" name="mobile" placeholder="Enter mobile" value="<?php if(isset($_REQUEST['id'])) {echo $result[3];}?>"/>
    </div>
    <div class="p">
        <input type="submit" name="btn" value="update"/>
    </div>
    </form>
</div>
</div>

</body>
</html>
<?php
    if(isset($_REQUEST['btn']))
    {
        $custname=$_REQUEST['custname'];
        $item=$_REQUEST['item'];
        $mobile=$_REQUEST['mobile'];
        $id=$_REQUEST['id'];
        $q="update tblcustomer set customer_name='$custname', item_purchase='$item',mobile_no=$mobile where customer_no=$id";
        // echo $q;
        $count=mysqli_query($conn,$q);
        if($count>0)
        {
            header("location:q10.php?update");
        }
        else
        {
            header("location:q10.php?notupdate");
        }
    }
?>