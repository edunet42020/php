<?php
include_once("connection.php");
session_start();
    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $uniquesavename=time().uniqid(rand());  
        $image_tmp_name=$_FILES['photo']['tmp_name'];
        $upload_folder_name="./assets/img/upload/user/".$uniquesavename.$_FILES['photo']['name'];
        //echo $upload_folder_name;
        $user_img_type=$_FILES['photo']['type'];
        $photo_size = $_FILES['photo']['size'];
        $store=$uniquesavename.$_FILES['photo']['name'];
        $encoded_password=base64_encode($password);
        move_uploaded_file($image_tmp_name,$upload_folder_name);
        $insert="insert into tbluser values(null,'$name','$store','$email','$encoded_password')";
        $ins=mysqli_query($conn,$insert);
        if($ins>0)
        {
            $select="select * from tbluser where user_emailid='$email' and user_password='$encoded_password'";
            //echo $select;
            $res=mysqli_query($conn,$select);
            $result=mysqli_fetch_array($res);
            echo $result['user_id'];
            $user_id=$result['user_id'];
            $_SESSION['id']=$user_id;
            header("location:index.php?login");
        }
        else{
            header("location:index.php?msg");
        }
    }
?>