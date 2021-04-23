<?php
    $selectimage="select blog_image from tblblog";
    $resimage=mysqli_query($conn,$selectimage);
   
?>
<div class="gallery-area" id="images">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <?php 
                        while($resultimage=mysqli_fetch_array($resimage))
                        {
                            $photo="assets/img/upload/blog/".$resultimage['blog_image'];
                    ?>
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(<?php echo $photo;?>);height:400px;width:auto;" ></div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                   

                </div>
            </div>
        </div>