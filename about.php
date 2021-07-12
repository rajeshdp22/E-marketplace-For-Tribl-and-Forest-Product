<?php
    include 'includes/navigation_bar.php';

?>
<!-- About Us  -->
    <div class="container about_us">
        <div class="row heading">
            <div class="col-xl-12">
                <h2>Welcome !</h2>
                <p>About Us</p>
            </div>
        </div>
        <!--Mission Section-->
        <?php 
            $sql=mysqli_query($con,"SELECT * FROM about_us where status = '1' order by order_number");
            while ($row = mysqli_fetch_assoc($sql)){
        ?>
            <div class="row mt-3" id="subtitle">
                <div class="col-xl-12">
                    <h3><?php echo $row['heading'];?></h3>
                </div>
            </div>
            <div class="row about_body">
                <div class="col-xl-6">
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo $row['message'];?> <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>
                <div class="col-xl-6">
                    <img src="<?php echo SITE_ABOUT_IMAGE.$row['image']?>" class="img-responsive img-thumbnail img-fluid" alt="">
                </div>
            </div>
            <?php } ?>
        <!--X-Mission Section-X-->

        <!-- Our Story -->
             <div class="row mt-5" id="subtitle">
                <div class="col-xl-12">
                    <h3>Our Story</h3>
                </div>
            </div>
            <div class="row our_slider">
                <div class="story_body" id="story_bg">
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i> This web app is very helpful for tribal and farmer. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                    <ul class="d-flex">
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <center>
                        <img src="<?php echo WEBSITE_PATH; ?>assets/about/about_vission.png" alt="">
                    </center>
                    <h5>Pruthviraj Rajput</h5>
                </div>
                <div class="story_body">
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i> This web app is very helpful for tribal and farmer. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                    <ul class="d-flex">
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <center>
                        <img src="<?php echo WEBSITE_PATH; ?>assets/about/about_vission.png" alt="">
                    </center>
                    <h5>Pruthviraj Rajput</h5>
                </div>
                <div class="story_body">
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i> This web app is very helpful for tribal and farmer. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                    <ul class="d-flex">
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <center>
                        <img src="<?php echo WEBSITE_PATH; ?>assets/about/about_vission.png" alt="">
                    </center>
                    <h5>Pruthviraj Rajput</h5>
                </div>
                <div class="story_body">
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i> This web app is very helpful for tribal and farmer. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                    <ul class="d-flex">
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </li>
                        <li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <center>
                        <img src="<?php echo WEBSITE_PATH; ?>assets/about/about_vission.png" alt="">
                    </center>
                    <h5>Pruthviraj Rajput</h5>
                </div>
            </div>
        <!-- Our Story -->
    </div>
<!-- X-About Us -X -->

<?php 
    include 'includes/footer.php';
?>