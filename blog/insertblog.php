<?php
    session_start();
    include_once("connection.php");
    if(isset($_REQUEST['btn']))
    {
        $title=$_REQUEST['title'];
        $des=$_REQUEST['des'];
        $cat=$_REQUEST['category'];
        $date=date("Y/m/d");
        $id=$_SESSION['id'];
        $uniquesavename=time().uniqid(rand());  
        $image_tmp_name=$_FILES['photo']['tmp_name'];
        $upload_folder_name="./assets/img/upload/blog/".$uniquesavename.$_FILES['photo']['name'];
        $user_img_type=$_FILES['photo']['type'];
        $photo_size = $_FILES['photo']['size'];
        $store=$uniquesavename.$_FILES['photo']['name'];
        move_uploaded_file($image_tmp_name,$upload_folder_name);
        $insert="insert into tblblog values(null,'$title','$store','$des','$cat','$date',$id)";
        echo $insert;
        $ins=mysqli_query($conn,$insert);
        if($ins>0)
        {
            header("location:addblog.php?added");
        }
        else{
            header("location:addblog.php?notadded");
        }
    }

?>