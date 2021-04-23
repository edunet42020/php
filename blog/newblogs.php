<?php
    $select="select * from tblblog order by blog_create desc LIMIT 0,3";
    $res=mysqli_query($conn,$select);

?>
<section  id="newblog"  class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>All Blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        while($result=mysqli_fetch_array($res))
                        {
                    ?>
                        
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-new-pro mb-30 text-center">
                            <a href="blog-details.php?blogid=<?php echo $result['blog_id'];?>">
                                <div class="product-img">
                                    <?php
                                        $photo="assets/img/upload/blog/".$result['blog_image'];
                                    ?>
                                    <img src="<?php echo $photo; ?>" alt="" style="height:400px;">
                                </div>
                                <div class="product-caption">
                                    <h3><?php echo $result['blog_title'];?></h3>
                                    <span><?php echo $result['blog_category'];?></span>
                                </div>
                                </a>
                            </div>
                        </div>
                       
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>