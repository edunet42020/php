<?php
    session_start();
    include_once("connection.php");
    if(isset($_REQUEST['btn']))
    {
        $emailid=$_REQUEST['emailid'];
        $password=$_REQUEST['password'];
        $encodepwd=base64_encode($password);
		$select="select * from tbluser where user_emailid='$emailid' and user_password='$encodepwd'";
        //echo $select;
        $res=mysqli_query($conn,$select);
        $count=mysqli_num_rows($res);
        $result=mysqli_fetch_array($res);
        if ($count>0)
        {
            $user_id=$result['user_id'];
            $_SESSION['id']=$user_id;
            header("location:index.php?login");	
        }
        else
        {
            header("location:login.php?invalid");
        }
    }
?>