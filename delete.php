<?php
    include_once("connection.php");
    $id=$_REQUEST['id'];
    $select="delete from tblcustomer where customer_no=$id";
    $count=mysqli_query($conn,$select);
   if($count>0)
   {
       header("location:q10.php?done");
   }
   else
   {
    header("location:q10.php?notdone");
   }
?>