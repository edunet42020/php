<?php
session_start();
if(!$_SESSION['id'])
{
    header("location:index.php");
}
include_once ("connection.php");
?>
<html>
<head>
    <TITLE>Prospect</TITLE>
    <LINK href="css/style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>

</head>
<body>
<?php
include_once("header.php");
include_once("left.php");
?>
<div class="wrapper">
    <!-- Left navigation -->
    <?php
    include_once("detail.php");
    ?>		<!-- Contact list -->
    <form class="mainForm" action="">
        <div class="widget first">
            <div class="head"><h5 class="iFrames">Prospect List</h5></div>
            <div id="myList-nav"><div class="ln-letters"><a class="all ln-selected" href="#">ALL</a><a style="position: relative;" class="a" href="#">A</a><a class="b" href="#">B</a><a class="c" href="#">C</a><a class="d" href="#">D</a><a class="e" href="#">E</a><a class="f ln-disabled" href="#">F</a><a class="g" href="#">G</a><a class="h" href="#">H</a><a class="i ln-disabled" href="#">I</a><a class="j" href="#">J</a><a class="k" href="#">K</a><a class="l" href="#">L</a><a class="m" href="#">M</a><a class="n" href="#">N</a><a class="o ln-disabled" href="#">O</a><a class="p" href="#">P</a><a class="q ln-disabled" href="#">Q</a><a class="r" href="#">R</a><a class="s" href="#">S</a><a class="t" href="#">T</a><a class="u ln-disabled" href="#">U</a><a class="v" href="#">V</a><a class="w ln-disabled" href="#">W</a><a class="x ln-disabled" href="#">X</a><a class="y" href="#">Y</a><a class="z ln-disabled" href="#">Z</a></div></div>
            <div id="example_wrapper" class="dataTables_wrapper" role="grid">
                <div class="datatable-header"><div id="example_filter" class="dataTables_filter">
                        <label><input aria-controls="example" type="text" placeholder = "Name" class = "search"></label>
                        <label><input aria-controls="example" type="text" placeholder = "Email Id"></label>
                        <label><input aria-controls="example" type="text" placeholder = "Phone No."></label>
                    </div>
                </div>

                <table class="tableStatic" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <td width="20%">product name</td>
                        <td width="20%">item name</td>
                        <td width="20%">Operations</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $select="select * from productitem order by productid";
                    $obj=mysqli_query($conn,$select);
                    while($result=mysqli_fetch_array($obj))
                    {
                    ?>
                    <tr>
                        <?php
                        $pid=$result['productid'];
                            $selectproduct="select productname from product where productid=$pid";
                            $objproduct=mysqli_query($conn,$selectproduct);
                            $resultproduct=mysqli_fetch_array($objproduct);
                        $iid=$result['itembasicid'];
                        $selectitem="select itemname from itembasic where itembasicid=$iid";
                        $objitem=mysqli_query($conn,$selectitem);
                        $resultitem=mysqli_fetch_array($objitem);
                        ?>
                        <td><?php echo $resultproduct['productname'];?></td>
                        <td> <?php echo $resultitem['itemname'];?></td>
                        <td STYLE = "text-align : center">
                            <a href="delete_product_item.php?did=<?php echo $result['productitemid'];?>" class="btn14"><img src = "images/delete.png" title = "follow_up"></a>
                        </td>
                    </tr>

                    </tbody>
                    <?php } ?>
                </table>
            </div>
    </form>
</div>
</div>
</div>
<!-- Footer -->
<?php
    include_once("footer.php");
?>



<div style="position: absolute; display: none;" class="limiterBox" id="limiterBox"></div><a style="display: none;" href="#" id="toTop"><span id="toTopHover"></span>To Top</a>
</body>
</html>
<?php
if(isset($_REQUEST['msg']))
{
    echo "<script type=\"text/javascript\">alert(\"record not deleted\");</script>";
    echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/catering/view_product_item.php'/>";
}
if(isset($_REQUEST['m']))
{
    echo "<script type=\"text/javascript\">alert(\"record deleted successfully\");</script>";
    echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/catering/view_product_item.php'/>";
}
?>
